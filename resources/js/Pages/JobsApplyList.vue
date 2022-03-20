<template>
    <!-- Might renamed to JobsApplySavedList.vue -->
    <Head title="Applied Jobs"></Head>
    <page-header v-if="$page.props.user"></page-header>

    <!-- NavBar for toggling Saved Job and Applied Job -->
    <div class="lg:max-w-3xl lg:mx-auto mx-4 my-10 px-4">
        <ul class="flex flex-row flex-wrap space-x-4 list-none bg-gray-100 rounded-xl p-4 mb-4">
            <li class="flex-auto text-center hover:bg-gray-200 hover:rounded-xl">
                <a 
                href="#"
                :class="[isActive('Saved Job') ? 'transition duration-300 ease-in-out bg-blue-900 text-white' : '', 'w-full block font-medium text-lg leading-tight capitalize rounded-xl py-4']"
                @click.prevent="setActive('Saved Job')">
                    Saved Job
                </a>
            </li>
            <li class="flex-auto text-center hover:bg-gray-200 hover:rounded-xl">
                <a 
                href="#"
                :class="[isActive('Applied Job') ? 'transition duration-300 ease-in-out bg-blue-900 text-white' : '', 'w-full block font-medium text-lg leading-tight capitalize rounded-xl py-4']"
                @click.prevent="setActive('Applied Job')">
                    Applied Job
                </a>
            </li>
        </ul>
    </div>

    <!-- Saved Job Tab -->
    <!-- If the job seeker has saved a job -->
    <div 
    class="lg:max-w-6xl lg:mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-y-10 mx-4 my-10 px-4"
    v-show="isActive('Saved Job')"
    v-if="saved_jobs.length != 0">
        <div
        v-for="job in saved_jobs" 
        :key="job.saved_job_id" 
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

            <!-- Job Status Bar (route to a job post if the job is available and not been applied yet) -->
            <div class="w-full basis-1/5 flex justify-center mb-4 py-2 my-auto">
                <button
                :class="[job.job_status === 'Available' ? 'bg-blue-900 hover:opacity-80' : 'bg-gray-400 cursor-auto', 'w-1/2 h-fit text-base text-center text-white rounded-xl shadow-lg p-2']">
                    {{ job.job_status === 'Available' ? 'Apply now' : job.job_status }}
                </button>
            </div>
        </div>
    </div>

    <!-- If job seekers don't save any jobs yet -->
    <div
    v-show="isActive('Saved Job')"
    v-else
    class="flex flex-col justify-center items-center space-y-8 lg:max-w-6xl lg:mx-auto mx-4 my-10 px-4">
        <div class="flex flex-col justify-center items-center space-y-4">
            <img 
            src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/void_3ggu.svg" 
            alt="SVG Logo"
            width="330"
            height="350">
            <h1 class="text-2xl text-center font-bold">Oops, it's empty here</h1>
            <h1 class="text-2xl text-center text-gray-300 font-medium">Start applying for jobs now!</h1>
        </div>

        <div class="flex justify-center items-center">
            <button
            type="button"
            class="bg-sky-400 hover:bg-sky-500 text-base text-center text-white font-bold rounded-xl shadow-md px-8 py-2">
            Browse Job
            </button>
        </div>
    </div>

    <!-- Applied Job Tab-->
    <!-- If job seekers have applied to a job already -->
    <div 
    class="lg:max-w-6xl lg:mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-y-10 mx-4 my-10 px-4"
    v-show="isActive('Applied Job')"
    v-if="applied_jobs.length != 0">
        <div
        v-for="job in applied_jobs" 
        :key="job.applied_job_id" 
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

            <!-- Status Bar -->
            <div class="w-full basis-1/5 flex justify-center mb-4 py-2 my-auto">
                <div class="w-1/2 h-fit bg-gray-400 text-base text-center text-white rounded-xl shadow-lg p-2">
                    {{ job.job_status }}
                </div>
            </div>
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
            <h1 class="text-2xl text-center text-gray-300 font-medium">Start applying for jobs now!</h1>
        </div>

        <div class="flex justify-center items-center">
            <button
            type="button"
            class="bg-sky-400 hover:bg-sky-500 text-base text-center text-white font-bold rounded-xl shadow-md px-8 py-2">
            Browse Job
            </button>
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
        props: {
            canLogin: Boolean,
            canRegister: Boolean
        },
        data() {
            return {
                selectedTab: 'Applied Job',
                saved_jobs: [
                    {
                        saved_job_id: 1,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Software Engineer',
                        company: 'Setel',
                        job_location: 'Kuala Lumpur',
                        job_industry: 'Technology',
                        job_type: 'Full-time',
                        job_status: 'Applied'
                    },
                    {
                        saved_job_id: 2,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Data Analyst',
                        company: 'Setel',
                        job_location: 'Kuala Lumpur',
                        job_industry: 'Technology',
                        job_type: 'Full-time',
                        job_status: 'Expired'
                    },
                    {
                        saved_job_id: 3,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'UX/UI Designer',
                        company: 'Setel',
                        job_location: 'Kuala Lumpur',
                        job_industry: 'Technology',
                        job_type: 'Full-time',
                        job_status: 'Available'
                    },
                ],
                applied_jobs: [
                    {
                        applied_job_id: 1,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Software Engineer',
                        company: 'Setel',
                        job_location: 'Kuala Lumpur',
                        job_industry: 'Technology',
                        job_type: 'Full-time',
                        job_status: 'In Review'
                    },
                    {
                        applied_job_id: 2,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Front-end Developer',
                        company: 'Setel',
                        job_location: 'Kuala Lumpur',
                        job_industry: 'Technology',
                        job_type: 'Part-time',
                        job_status: 'Viewed'
                    },
                    {
                        applied_job_id: 3,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Back-end Developer',
                        company: 'Setel',
                        job_location: 'Kuala Lumpur',
                        job_industry: 'Technology',
                        job_type: 'Full-time',
                        job_status: 'Viewed'
                    },
                ],
            }
        },
        methods: {
            setActive(selectedTab) {
                this.selectedTab = selectedTab;
            },
            isActive(selectedTab) {
                return this.selectedTab === selectedTab;
            }
        }
    })
</script>

<style scoped>

</style>