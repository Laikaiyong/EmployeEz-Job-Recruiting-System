<template>
    <Head title="JobPost"></Head>
    <page-header v-if="$page.props.user"></page-header>
    
    <!-- Job cards -->
    <div class="lg:max-w-7xl lg:mx-auto grid job-container justify-center gap-y-10 mx-4 my-10">
        <div
        v-for="job in createdJobs" 
        :key="job.id" 
        class="w-3/4 h-full flex flex-col justify-center place-self-center shadow-lg rounded-3xl">
            <!-- Company Cover Image -->
            <img 
            v-if="job.cover_image_url"
            :src="job.cover_image_url" 
            class="w-full basis-2/5 my-auto object-cover rounded-t-3xl"
            alt="Company Logo">
            <img
            v-else
            src="/img/EmployeEz banner.png"
            class="w-full basis-2/5 my-auto object-cover rounded-t-3xl"
            alt="Company Logo">
            
            <!-- Job Info -->
            <div class="w-full basis-2/5 my-auto">
                <div class="mx-4 mb-4 px-4 my-4">
                    <h2 class="font-bold"> {{ job.title }} </h2>
                    <p class="text-gray-500"> {{ job.company }} </p>
                </div>
                
                <!-- Icons and Info -->
                <div class="text-sm text-gray-500 mx-4 mb-4 px-4">
                    <div>
                        <img 
                        src="https://www.svgrepo.com/show/156159/location.svg" 
                        alt="Location Logo"
                        width="20"
                        height="20"
                        class="inline">
                        <span class="mx-4"> {{ job.location }} </span>
                    </div>

                    <div class="mt-4">
                        <img 
                        src="https://www.svgrepo.com/show/16795/briefcase.svg" 
                        alt="Sector Logo"
                        width="20"
                        height="20"
                        class="inline">
                        <span class="mx-4"> {{ job.industry }} </span>
                    </div>

                    <div class="mt-4">
                        <img 
                        src="https://www.svgrepo.com/show/21938/time.svg" 
                        alt="Job Type Logo"
                        width="20"
                        height="20"
                        class="inline">
                        <span class="mx-4"> {{ job.type }} </span>
                    </div>
                </div>
            </div>

            <!-- Buttons for extend and delete job -->
            <div class="flex flex-col justify-center items-center space-y-4 mt-2 mb-4">
                <a
                :href="route('jobs.edit', {'id': job.id})"
                type="button" 
                class="inline-block px-6 py-2.5 w-5/6 bg-blue-600 text-center text-white font-medium text-sm leading-tight uppercase rounded-xl shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Edit
                </a>
                
                <button type="button" class="inline-block px-6 py-2.5 w-5/6 bg-rose-500 text-white font-medium text-sm leading-tight uppercase rounded-xl shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out"
                @click="showModal(index, job.id)">
                Delete
                </button>
            </div>

            <!-- Confirmation Modal -->
            <Transition name="confirmation_modal">
                <div
                v-if="showingModal(index)"
                :id="'Modal' + index"
                class="modal fixed inset-0 w-full h-screen flex justify-center items-center bg-black">
                    <div class="w-full lg:max-w-xl mx-4 bg-white shadow-lg rounded-lg">
                        <!-- Closing button -->
                        <div class="flex justify-end">
                            <button
                            aria-label="close"
                            class="text-2xl text-gray-500 my-2 mx-4"
                            @click.prevent="close()">
                                ×
                            </button>
                        </div>
                            
                        <!-- Modal Image -->
                        <div class="flex flex-shrink-0 justify-center items-center w-full bg-clip-padding rounded-md outline-none px-4">
                            <img 
                            src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Throw_away_re_x60k.svg" 
                            alt="SVG LOGO"
                            width="200"
                            height="120">
                        </div>
                        
                        <!-- Modal Message -->
                        <div class="p-4">
                            <p class="text-base text-center mt-4">
                                Are you sure that you want to delete this job post?
                            </p>
                        </div>

                        <!-- Close and Confirm buttons -->
                        <div class="flex flex-shrink-0 flex-wrap items-center justify-center space-x-4 rounded-b-md px-4 pt-4 my-4">
                            <button 
                            type="button"
                            class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                            @click="close()">
                                Cancel
                            </button>
                            <button 
                            type="button"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                            @click="deleteJobCreated(job_index)">
                                Confirm
                            </button>
                        </div>
                    </div>
                </div>
            </Transition>
        </div>
    </div>

    <page-footer></page-footer>
</template>

<script>
    import { defineComponent } from 'vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            PageHeader,
            PageFooter,
            Head
        },
        data() {
            var job_index = 0;
            var createdJobs = [];
            for(let createdId = 0; createdId <= (this.$page.props.created_jobs).length - 1; createdId++)
            {
                if(this.$page.props.user.id == this.$page.props.created_jobs[createdId].user_id)
                {
                    createdJobs.push(this.$page.props.created_jobs[createdId]);
                }
            }
            return {
                selected_modal: '',
                createdJobs,
                job_index,
            }
        },
        methods: {
            showModal(index, job_id) {
                this.selected_modal = 'Modal' + index;
                this.job_index = job_id;
            },
            showingModal(index) {
                return this.selected_modal === ('Modal' + index);
            },
            close() {
                this.selected_modal = '';
            },
            deleteJobCreated(job_id) {
                // after clicking confirm delete
                this.selected_modal = '';
                this.$inertia.delete(`/jobposts/${job_id}`);   
            }
        } 
    })
</script>

<style scoped>
.job-container {
    grid-template-columns: repeat(auto-fit, 380px);
}
.modal {
    background-color: rgba(0, 0, 0, 0.75);
}

.confirmation_modal-enter-active,
.confirmation_modal-leave-active {
  transition: opacity 0.4s ease;
}

.confirmation_modal-enter,
.confirmation_modal-leave-to {
  opacity: 0;
}
</style>