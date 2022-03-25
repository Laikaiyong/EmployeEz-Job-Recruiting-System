<template>
    <Head title="JobPost"></Head>
    <page-header v-if="$page.props.user"></page-header>

    <!-- Search bar -->
    <div class="lg:max-w-6xl lg:mx-auto mx-4 my-10">
        <div class="mx-4 lg:max-w-6xl lg:mx-auto mx-4 mt-10">
            <div class="flex justify-center items-center mt-10">
                <input 
                class="border-2 border-gray-300 bg-white px-5 rounded-lg text-sm focus:outline-none lg:w-96" 
                type="search" 
                v-model="keyword" 
                name="search" 
                placeholder="Search by job name e.g. Manager">

                <!-- referred from MainJobs.vue (job search icon)-->
                <button type="button" class="ml-6 inline-block">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Job cards -->
    <div class="lg:max-w-7xl lg:mx-auto grid job-container justify-center gap-y-10 mx-4 my-10">
        <div
        v-for="(job, index) in jobs_created" 
        :key="job.job_created_id" 
        class="w-3/4 h-full flex flex-col justify-center place-self-center shadow-lg rounded-3xl">
            <!-- Company Cover Image -->
            <img 
            v-if="job.cover_img"
            :src="job.cover_img" 
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
                    <h2 class="font-bold"> {{ job.job_title }} </h2>
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
                        <span class="mx-4"> {{ job.job_location }} </span>
                    </div>

                    <div class="mt-4">
                        <img 
                        src="https://www.svgrepo.com/show/16795/briefcase.svg" 
                        alt="Sector Logo"
                        width="20"
                        height="20"
                        class="inline">
                        <span class="mx-4"> {{ job.job_industry }} </span>
                    </div>

                    <div class="mt-4">
                        <img 
                        src="https://www.svgrepo.com/show/21938/time.svg" 
                        alt="Job Type Logo"
                        width="20"
                        height="20"
                        class="inline">
                        <span class="mx-4"> {{ job.job_type }} </span>
                    </div>
                </div>
            </div>

            <!-- Buttons for extend and delete job -->
            <div class="flex flex-col justify-center items-center space-y-4 mt-2 mb-4">
                <button 
                type="button" 
                class="inline-block px-6 py-2.5 w-5/6 bg-blue-600 text-white font-medium text-xs leading-tight rounded-xl shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Extend application duration
                </button>
                
                <button type="button" class="inline-block px-6 py-2.5 w-5/6 bg-rose-500 text-white font-medium text-xs leading-tight rounded-xl shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out"
                @click="showModal(index)">
                Delete job
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
                            <h2 class="text-xl text-center font-extrabold">Confirm job deletion of "{{ job.job_title }}"?</h2>
                            <p class="text-base text-center mt-4">It will be permanently deleted after 30 days.</p>
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
                            class="inline-block px-6 py-2.5 bg-rose-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-rose-700 hover:shadow-lg focus:bg-rose-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                            @click="deleteJobCreated(job.job_created_id)">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </Transition>

            <!-- Expired date -->
            <div class="mx-auto my-4">
                <p class="text-left text-xs text-gray-400 font-bold">
                    Expired at {{ job.closing_application_date }}
                </p>
            </div>
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
            return {
                selected_modal: '', // only can delete 1 job at a time
                jobs_created: [
                    {
                        job_created_id: 1,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Software Engineer',
                        company: 'Setel',
                        job_location: 'Kuala Lumpur',
                        job_industry: 'Technology',
                        job_type: 'Full-time',
                        closing_application_date: '16/1/2022'
                    },
                    {
                        job_created_id: 2,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Front-end Developer',
                        company: 'Setel',
                        job_location: 'Kuala Lumpur',
                        job_industry: 'Technology',
                        job_type: 'Part-time',
                        closing_application_date: '16/1/2022'
                    },
                    {
                        job_created_id: 3,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Back-end Developer',
                        company: 'Setel',
                        job_location: 'Kuala Lumpur',
                        job_industry: 'Technology',
                        job_type: 'Full-time',
                        closing_application_date: '16/1/2022'
                    },
                    {
                        job_created_id: 4,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Back-end Developer',
                        company: 'Setel',
                        job_location: 'Kuala Lumpur',
                        job_industry: 'Technology',
                        job_type: 'Full-time',
                        closing_application_date: '16/1/2022'
                    },
                ]
            }
        },
        methods: {
            showModal(index) {
                this.selected_modal = 'Modal' + index;
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
                this.jobs_created = this.jobs_created.filter(
                    job => {
                        return job.job_created_id !== job_id
                    }
                );
                
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