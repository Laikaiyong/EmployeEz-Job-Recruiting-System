<template>
  <app-layout title="Applied Jobs">
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Applied Job
        </h2>
    </template>
        <!-- Applied Job Tab-->
    <!-- If job seekers have applied to a job already -->
    <div 
    class="lg:max-w-6xl lg:mx-auto grid applied-container gap-y-10 justify-center mx-4 my-10 px-4"
    v-if="appliedJobs.length != 0">
        <div
        v-for="(job, index) in appliedJobs" 
        :key="job.applied_job_id" 
        class="w-3/4 h-full flex flex-col justify-center place-self-center shadow-lg rounded-3xl">
            <!-- Company Cover Image -->
            <img 
            v-if="job.jobpost_cover"
            :src="job.jobpost_cover" 
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
                    <h2 class="font-bold"> {{ job.jobpost_title }} </h2>
                    <p class="text-gray-500"> {{ job.company_name }} </p>
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
                        <span class="mx-4"> {{ job.jobpost_location }} </span>
                    </div>

                    <div class="mt-4">
                        <img 
                        src="https://www.svgrepo.com/show/16795/briefcase.svg" 
                        alt="Sector Logo"
                        width="20"
                        height="20"
                        class="inline">
                        <span class="mx-4"> {{ job.jobpost_industry }} </span>
                    </div>

                    <div class="mt-4">
                        <img 
                        src="https://www.svgrepo.com/show/21938/time.svg" 
                        alt="Job Type Logo"
                        width="20"
                        height="20"
                        class="inline">
                        <span class="mx-4"> {{ job.jobpost_type }} </span>
                    </div>
                </div>
            </div>

            <div class="w-full basis-1/5 flex justify-center mb-4">
                <button class="w-5/6 h-fit bg-rose-500 text-base text-center text-white rounded-xl shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out p-2"
                @click="showModal(index)">
                    Withdraw
                </button>
            </div>

            <!-- Confirmation Modal -->
            <Transition name="confirmation_modal">
                <div
                v-if="showingModal(index)"
                :id="'Modal' + index"
                class="modal fixed inset-0 w-full h-screen flex justify-center items-center bg-black">
                    <div class="w-full lg:max-w-xl mx-4 bg-white shadow-lg rounded-lg">
                        <!-- Modal Header -->
                        <div class="flex flex-shrink-0 justify-end items-center w-full bg-clip-padding rounded-md outline-none px-4">
                            <!-- Closing button -->
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
                                Are you sure that you want to withdraw the job application of "{{ job.jobpost_title }}"?
                            </p>
                        </div>

                        <!-- Close and Confirm buttons -->
                        <div class="flex flex-shrink-0 flex-wrap items-center justify-center space-x-4 rounded-b-md px-4 pt-4 my-4">
                            <button 
                            type="button"
                            class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                            @click="close()">
                                Cancel
                            </button>
                            <button 
                            type="button"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                            @click="deleteAppliedJob(job.id)">
                                Confirm
                            </button>
                        </div>
                    </div>
                </div>
            </Transition>
        </div>
    </div>
    
    <!-- If job seekers don't save or apply to any jobs yet -->
    <div
    v-show="isActive('Applied Job')"
    v-else
    class="flex flex-col justify-center items-center space-y-8 lg:max-w-6xl lg:mx-auto mx-4 my-10 px-4">
        <div class="flex flex-col justify-center items-center space-y-4">
            <img 
            src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/void_3ggu.svg" 
            alt="SVG Logo"
            width="330"
            height="350">
            <h1 class="text-2xl text-center font-bold">Oops, it's empty here</h1>
            <h1 class="text-xl text-center text-gray-500 font-medium">Start applying for jobs now!</h1>
        </div>

        <a 
        :href="route('jobs')"
        class="flex justify-center items-center">
            <button
            type="button"
            class="bg-indigo-400 hover:bg-indigo-500 text-base text-center text-white font-bold rounded-xl shadow-md px-8 py-2">
            Browse Job
            </button>
        </a>
    </div>
    <page-footer></page-footer>
  </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { defineComponent } from 'vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            PageHeader,
            PageFooter,
            Head,
            AppLayout
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean
        },
        data() {
            var appliedJobs = [];
            for(let applyId = 0; applyId <= (this.$page.props.applied_jobs.data).length - 1; applyId++)
            {
                if(this.$page.props.user.id == this.$page.props.applied_jobs.data[applyId].user_id)
                {
                    appliedJobs.push(this.$page.props.applied_jobs.data[applyId]);
                }
            }
            return {
                selectedTab: 'Applied Job',
                selected_modal: '', // can only withdraw 1 application at a time
                appliedJobs
            }
        },
        methods: {
            setActive(selectedTab) {
                this.selectedTab = selectedTab;
            },
            isActive(selectedTab) {
                return this.selectedTab === selectedTab;
            },
            showModal(index) {
                this.selected_modal = 'Modal' + index;
            },
            showingModal(index) {
                return this.selected_modal === ('Modal' + index);
            },
            close() {
                this.selected_modal = '';
            },
            deleteAppliedJob(job_id) {
                // delete the application from the list above and from database
                this.selected_modal = '';
                this.$inertia.delete(`/application/${job_id}`);
            },
        }
    })
</script>

<style scoped>
.applied-container{
    grid-template-columns: repeat(auto-fit, 370px);
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