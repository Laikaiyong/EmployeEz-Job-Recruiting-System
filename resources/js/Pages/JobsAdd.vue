<template>
    <Head title="Add Jobs"></Head>
    <page-header v-if="$page.props.user"></page-header>

    <div class="lg:max-w-7xl lg:mx-auto">
        <h1 class="text-3xl font-bold text-center lg:text-left lg:ml-6 pb-4 mt-4">Add new job</h1>
        <form @submit.prevent="submit">
            <div class="flex flex-col lg:flex-row justify-center mt-4 mb-8">
                <!-- Left side -->
                <div class="flex justify-center lg:basis-1/2">
                    <div class="flex flex-col justify-center items-center bg-white lg:rounded-lg lg:shadow-lg w-full lg:w-5/6 py-8">
                        <!-- Cover photo -->
                        <div class="flex flex-col justify-center items-center mt-4">
                            <h2 class="text-xl text-center font-bold">Cover photo</h2>
                            <div class="text-center">
                                <input type="file" class="hidden"
                                ref="photo"
                                @change="updatePhotoPreview">

                                <jet-label for="photo" />

                                <!-- Current Profile Photo -->
                                <div class="mt-2" v-show="! photoPreview">
                                    <img src="https://st3.depositphotos.com/23594922/31822/v/600/depositphotos_318221368-stock-illustration-missing-picture-page-for-website.jpg" class="rounded-lg shadow-lg w-60 h-60 bg-white max-w-1/2 my-4">
                                </div>

                                <!-- New Profile Photo Preview -->
                                <div class="mt-2" v-show="photoPreview">
                                    <span class="block rounded-lg shadow-lg  w-60 h-60 bg-cover bg-no-repeat bg-center"
                                        :style="'background-image: url(\'' + photoPreview + '\');'">
                                    </span>
                                </div>

                                <jet-secondary-button class="mt-2 mr-2 bg-indigo-600 text-white hover:text-white hover:bg-indigo-700" type="button" @click.prevent="selectNewPhoto">
                                    Upload
                                </jet-secondary-button>

                                <jet-secondary-button type="button" class="mt-2 bg-rose-700 text-white hover:text-white hover:bg-rose-800" @click.prevent="deletePhoto" v-if="photoPreview">
                                    Remove
                                </jet-secondary-button>

                                <jet-input-error :message="form.errors.photo" class="mt-2" />
                                </div>
                        </div>

                        <!-- Left side form -->
                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <jet-label for="job_title" class="inline-block mb-2 text-gray-700 font-bold" value="Job Title" />
                                <jet-input class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="job_title"
                                v-model="form.title"
                                placeholder="Enter job title" autocomplete="position" />
                                <jet-input-error :message="form.errors.title" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <jet-label for="job_location" class="inline-block mb-2 text-gray-700 font-bold" value="Job Location" />
                                <jet-input type="text"
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="job_location"
                                v-model="form.location"
                                placeholder="Enter job location"  autocomplete="state" />
                                <jet-input-error :message="form.errors.location" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <jet-label for="type" class="inline-block mb-2 text-gray-700 font-bold" value="Job Type" />
                                <select 
                                class="appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                aria-label="Default select example"
                                name="type"
                                id="type"
                                v-model="form.type">
                                    <option value="" selected disabled hidden>Select job type</option>
                                    <option v-for="option in types"
                                    :key="option" :value="option"> {{ option }} </option>
                                </select>
                                <jet-input-error :message="form.errors.type" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <jet-label                   for="industry" class="inline-block mb-2 text-gray-700 font-bold" value="Job Industry" />
                                <select 
                                class="appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
                                name="industry"
                                id="industry"
                                v-model="form.industry">
                                    <option value="" selected disabled hidden>Select job industry</option>
                                    <option v-for="option in industries" :key="option" :value="option"> {{ option }} </option>
                                </select>
                                <jet-input-error :message="form.errors.industry" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <jet-label for="duration" class="inline-block mb-2 text-gray-700 font-bold" value="Duration" />
                                <jet-input type="text"
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="duration"
                                v-model="form.duration"
                                placeholder="Enter duration (Optional)" />
                                <jet-input-error :message="form.errors.duration" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <jet-label for="experience_level" class="inline-block mb-2 text-gray-700 font-bold" value="Level" />
                                <select 
                                class="appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
                                name="experience_level"
                                id="experience_level"
                                v-model="form.experience_level">
                                    <option value="" selected disabled hidden>Select Experience Level</option>
                                    <option v-for="option in experiences_level" :key="option" :value="option"> {{ option }} </option>
                                </select>
                                <jet-input-error :message="form.errors.experience_level" class="mt-2" />
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Right side -->
                <div class="flex justify-center lg:basis-1/2">
                    <div class="flex flex-col justify-center items w-5/6 py-8"> 
                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <jet-label for="job_description" class="inline-block mb-2 text-gray-700 font-bold" value="Job Description" />
                                <textarea
                                class="appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm h-60" 
                                id="job_description"
                                rows="5"
                                v-model="form.description"
                                placeholder="Enter job description"></textarea>
                                <jet-input-error :message="form.errors.description" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <jet-label for="job_requirement" class="inline-block mb-2 text-gray-700 font-bold" value="Job Requirement" />
                                <textarea
                                class="appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm h-60"
                                id="job_requirement"
                                rows="5"
                                v-model="form.requirement"
                                placeholder="Enter job requirement"></textarea>
                                <jet-input-error :message="form.errors.requirement" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <label for="beneficial_skills" class="inline-block mb-2 text-gray-700 font-bold">Beneficial Skills</label>
                                <textarea
                                class="appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm h-60"
                                id="beneficial_skills"
                                rows="5"
                                v-model="form.beneficial_skills"
                                placeholder="Enter beneficial skills"></textarea>
                                <jet-input-error :message="form.errors.beneficial_skills" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <jet-label for="job_salary" class="inline-block mb-2 text-gray-700 font-bold font-bold" value="Salary / Allowances" />
                                <jet-input type="text"
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="job_salary"
                                v-model="form.allowance"
                                placeholder="Enter salary amount (Optional)" />
                                <jet-input-error :message="form.errors.allowance" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <jet-label for="closing_date" class="inline-block mb-2 text-gray-700 font-bold" value="Application Closing Date" />
                                <jet-input
                                type="date"
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="closing_date"
                                v-model="form.closing_date"
                                placeholder="Enter application closing date"
                                autocomplete="date"/>
                                <jet-input-error :message="form.errors.closing_date" class="mt-2" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="flex justify-center py-4 mt-4 mb-8">
                <jet-button
                class="inline-block px-12 py-2.5 ml-6 bg-blue-600 text-white font-medium text-base leading-tight uppercase rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                type="submit"
                :class="{ 'opacity-25': form.processing }" 
                :disabled="form.processing">
                Submit
                </jet-button>
            </div>
        </form>
    </div>

    <page-footer></page-footer>
</template>

<script>
    import { defineComponent } from 'vue';
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
        data() {
            return {
                types: [
                    'Internship',
                    'Full Time',
                    'Part Time',
                    'Contract'
                ],
                industries: [
                    'Technology', 
                    'Finance', 
                    'Multimedia',
                    'Marketing',
                    'Business',
                    'Engineering',
                    'Others'
                ],
                experiences_level: [
                    'Beginner',
                    'Intermediate',
                    'Advanced'
                ],
                form: this.$inertia.form({
                    _method: 'POST',
                    title: null,
                    location: null,
                    type: "",
                    industry: "",
                    description: null,
                    requirement: null,
                    beneficial_skills: null,
                    experience_level: "",
                    allowance: null,
                    closing_date: null,
                    photo: null,
                    user_id: this.$page.props.user.id,
                    company: this.$page.props.user.name,
                    duration: null,
                }),
                photoPreview: null
            }
        },
        
        methods: {
            selectNewPhoto() {
                this.$refs.photo.click();
            },

            updatePhotoPreview() {
                const photo = this.$refs.photo.files[0];

                if (! photo) return;

                const reader = new FileReader();

                reader.onload = (e) => {
                    this.photoPreview = e.target.result;
                };

                reader.readAsDataURL(photo);
            },

            deletePhoto() {
                this.photoPreview = null;
                this.clearPhotoFileInput();
            },

            clearPhotoFileInput() {
                if (this.$refs.photo?.value) {
                    this.$refs.photo.value = null;
                }
            },

            submit() {
                if (this.$refs.photo) {
                    this.form.photo = this.$refs.photo.files[0];
                }
                this.form.post(this.route('jobposts.store'));
            },
        },
    })
</script>

<style scoped>

</style>