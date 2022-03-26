<template>
    <Head :title="'Apply '+$page.props.selectedJob.title"></Head>
    <page-header v-if="$page.props.user"></page-header>

    <form @submit.prevent="submit">
        <div>
            <div class="mx-8 lg:max-w-6xl lg:mx-auto my-4">
                <h1 class="text-center lg:text-left text-2xl font-bold">Applying for {{ $page.props.selectedJob.title }} at {{ $page.props.selectedJob.company }}</h1>
                <div class="xl:max-w-5xl xl:mx-auto my-6">
                    <div class="mx-8 flex flex-col lg:flex-row justify-center items-center">
                        <img
                        :src="$page.props.user.profile_photo_url"
                        class="rounded-lg w-32"
                        alt="Avatar"/>

                        <div class="lg:basis-1/3 flex flex-col justify-center p-6 mx-2 text-center lg:text-left">
                            <p class="text-gray-900 text-xl font-bold mb-2"> {{ $page.props.user.name }} </p>
                            <p v-if="$page.props.user.title" class="text-gray-700 text-base"> {{ $page.props.user.title }} </p>
                            <p class="text-gray-700 text-base"> {{ $page.props.user.email }} </p>
                        </div>

                        <a :href="route('user.profile', {id: $page.props.user.id, name: $page.props.user.name})" class="lg:basis-1/3 flex justify-center">
                            <button type="button" 
                            class="inline-block px-8 py-2.5 lg:py-4 bg-blue-700 text-white font-medium text-base leading-tight rounded-3xl lg:rounded-lg shadow-md hover:bg-blue-800 hover:shadow-lg focus:bg-blue-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-900 active:shadow-lg transition duration-150 ease-in-out">
                            Edit Profile</button>
                        </a>
                    </div>
                </div>
            </div>

            <div id="resume_bg" class="w-screen my-6">
                <div class="mx-8 lg:max-w-6xl lg:mx-auto py-6">
                    <jet-label for="upload_resume" class="text-center lg:text-left text-2xl font-bold" value="Resume" />

                    <!-- Drag and Drop Zone -->
                    <div 
                    @dragenter.prevent="toggleActive()" 
                    @dragleave.prevent="toggleActive()"
                    @dragover.prevent
                    @drop.prevent="drop($event)"
                    @change="selectedFile()"
                    :class="{ 'opacity-75 bg-white': active}"
                    class="flex flex-col justify-center items-center border-dashed border-2 border-blue-900 rounded-xl mt-4"
                    id="resume_section">

                        <!-- This is Drag and Drop Area for Resume File -->
                        <div class="flex flex-col justify-center items-center lg:max-w-6xl lg:mx-auto mx-8 py-6">
                            
                            <!-- The resume icon or file preview if uploaded -->
                            <div :class="{'w-20 h-24 flex flex-col justify-center items-center' : file_uploaded}">
                                <button
                                class="self-end text-xs font-bold" 
                                v-show="file_uploaded" 
                                @click.prevent="reset">&#x2715;</button>

                                <img 
                                src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Resume_re_hkth.svg" 
                                alt="resume icon"
                                width="200"
                                height="180"
                                id="resume_icon">   
                            </div>

                            <!-- upload file button -->
                            <div class="flex flex-col justify-center items-center mt-6">
                                <input 
                                type="file" 
                                id="upload_resume"
                                hidden>
                                
                                <p class="text-center lg:text-left text-xs font-base" v-show="!file_uploaded">
                                    You can also drag and drop your resume here!
                                </p>

                                <label 
                                for="upload_resume"
                                class="inline-block px-6 py-2.5 mt-4 w-48 bg-blue-700 text-white font-medium text-xs text-center leading-tight rounded-3xl shadow-md hover:bg-blue-800 hover:shadow-lg focus:bg-blue-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-900 active:shadow-lg transition duration-150 ease-in-out">
                                Upload Resume
                                </label>

                                <p class="text-xs text-center font-medium w-48 mt-4" v-show="file_uploaded">File Uploaded:</p>
                                <p class="text-xs text-center font-medium w-48" v-show="file_uploaded"> {{ dropZoneFile.name }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <jet-input-error :message="form.errors.resume" class="mt-2" />

            <!-- Additional Comments Section -->
            <div class="lg:max-w-6xl lg:mx-auto py-6 mx-8 my-6">
                <jet-label for="additional_comments" class="block text-center lg:text-left text-2xl font-bold" value="Additional comments" />
                <textarea 
                id="additional_comments" 
                rows="10"
                class="inline-block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-blue-900 rounded-lg transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none resize-none mt-4"
                v-model="form.additional_comments"
                placeholder="You can write what you want the recruiter to know"></textarea>
                <jet-input-error :message="form.errors.additional_comments" class="mt-2" />
            </div>

            <div class="lg:max-w-6xl lg:mx-auto pb-6 mx-8 mb-6 flex justify-center lg:justify-end">
                <jet-button type="submit" 
                class="inline-block px-8 py-2.5 bg-blue-700 text-white font-bold text-base leading-tight rounded-3xl shadow-md hover:bg-blue-800 hover:shadow-lg focus:bg-blue-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-900 active:shadow-lg transition duration-150 ease-in-out"
                :class="{ 'opacity-25': form.processing }" 
                :disabled="form.processing">
                Submit</jet-button>
            </div>
        </div>
    </form>
    <page-footer></page-footer>
</template>

<script>
    import { defineComponent, ref } from 'vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    import JetButton from '@/Jetstream/Button.vue'
    import JetFormSection from '@/Jetstream/FormSection.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetInputError from '@/Jetstream/InputError.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetActionMessage from '@/Jetstream/ActionMessage.vue'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'
    export default defineComponent({
        components: {
            PageHeader,
            PageFooter,
            Head,
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            JetDropdown,
            JetSecondaryButton,
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean
        },
        data() {
            return {
                job_position: 'Software Engineer',
                company: 'Setel',
                form: this.$inertia.form({
                    _method: 'POST',
                    user_name: this.$page.props.user.name,
                    user_id: this.$page.props.user.id,
                    jobpostid: this.$page.props.selectedJob.id,
                    jobpost_type: this.$page.props.selectedJob.type,
                    jobpost_title: this.$page.props.selectedJob.title,
                    jobpost_cover: this.$page.props.selectedJob.cover_image_url,
                    jobpost_location: this.$page.props.selectedJob.location,
                    jobpost_industry: this.$page.props.selectedJob.industry,
                    company_id: this.$page.props.selectedJob.user_id,
                    company_name: this.$page.props.selectedJob.company,
                    resume: null,
                    additional_comments: null,
                }),
                dropZoneFile: ref(""),
                active: false,
                file_uploaded: false
            }
        },
        methods: {
            toggleActive() {
                this.active = !this.active;
            },

            drop(event) {
                // when a file is dropped on the drop zone
                this.dropZoneFile = event.dataTransfer.files[0];
                let file_icon = document.querySelector('#resume_icon');
                file_icon.src = 'https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg';

                this.file_uploaded = true;
                this.toggleActive();
            },

            selectedFile() {
                // when a file is uploaded through upload resume button
                this.dropZoneFile = document.querySelector('#upload_resume').files[0];

                // display file preview
                let file_icon = document.querySelector('#resume_icon');
                file_icon.src = 'https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg';

                this.file_uploaded = true;
            },

            reset () {
                this.dropZoneFile.value = ref("");
                let file_input = document.querySelector('#upload_resume');
                file_input.value = "";

                // change back the icon
                let file_icon = document.querySelector('#resume_icon');
                file_icon.src = 'https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Resume_re_hkth.svg';
                file_icon.width = 200;
                file_icon.height = 180;

                this.file_uploaded = false;
            },
            submit() {
                if (this.dropZoneFile) {
                    this.form.resume = this.dropZoneFile;
                }
                this.form.post(this.route('application.store'));
            },
        }
    })
</script>

<style scoped>
#resume_bg {
    background: rgba(96, 150, 253, 0.12);
}
</style>