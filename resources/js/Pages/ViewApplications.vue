<template>
    <Head title="Jobs"></Head>
    <page-header v-if="$page.props.user"></page-header>

    <div class="lg:max-w-6xl lg:mx-auto mx-4 my-10">
        <div class="flex flex-col space-y-4 lg:flex-row justify-between items-center">
            <h1 class="lg:basis-4/5 text-center lg:text-left text-2xl font-bold"> {{ selected_job }} </h1>
            
            <!-- Job title dropdown -->
            <select 
            class="lg:basis-1/5 appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
            name="industry"
            id="job_title"
            v-model="selected_job">
                <option value="" selected disabled hidden>Select job positions</option>
                <option v-for="(option, index) in jobs_created" :key="index" :value="option.job_title"> {{ option.job_title }} </option>
            </select>
        </div>
    </div>

    <!-- Search bar -->
    <div class="lg:max-w-6xl lg:mx-auto mx-4 my-10">
        <div class="mx-4 lg:max-w-6xl lg:mx-auto mx-4 mt-10">
            <div class="flex justify-center items-center mt-10">
                <input 
                class="border-2 border-gray-300 bg-white px-5 rounded-lg text-sm focus:outline-none lg:w-96" 
                type="search" 
                v-model="keyword" 
                name="search" 
                placeholder="Search by name">

                <!-- referred from MainJobs.vue (job search icon)-->
                <button type="button" class="ml-6 inline-block">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Applicants cards -->
    <div class="lg:max-w-7xl lg:mx-auto mx-4">
        <div class="grid applicant-container justify-center gap-y-10 mx-4 my-10">
            <!-- Applicant card -->
            <div 
            v-for="(applicant, index) in applicants"
            :key="index"
            class="w-3/4 h-full place-self-center flex flex-col space-y-4 shadow-lg rounded-3xl p-4">
                <div class="w-full px-4 mt-4">
                    <h1 class="text-xl text-left font-bold"> {{ applicant.name }} </h1>
                    <p class="text-left text-sm text-gray-500"> {{ applicant.title }} </p>
                </div>

                <div class="w-full">
                    <div class="px-4">
                        <img 
                        src="https://www.svgrepo.com/show/156159/location.svg" 
                        alt="Location Logo"
                        width="20"
                        height="20"
                        class="inline">
                        <span class="text-sm text-gray-500 mx-4"> {{ applicant.city }} </span>   
                    </div>
                </div>

                <div class="flex justify-center items-center my-4">
                    <button class="text-center text-white text-sm bg-blue-800 rounded-3xl shadow-md hover:bg-opacity-80 hover:shadow-lg active:bg-blue-900 active:shadow-lg px-6 py-2.5 w-3/4">
                        View application
                    </button>
                </div>
                
                <!-- Applied time -->
                <p class="text-left text-xs text-gray-500 px-4"> {{ applicant.applied_timestamp }} </p>
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
        props: {
            canLogin: Boolean,
            canRegister: Boolean
        },
        data() {
            return {
                selected_job: '', // initiate this as the first job post in the list
                jobs_created: [
                    {
                        job_created_id: 1,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Software Engineer',
                    },
                    {
                        job_created_id: 2,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Front-end Developer',
                    },
                    {
                        job_created_id: 3,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Back-end Developer',
                    },
                    {
                        job_created_id: 4,
                        cover_img: 'https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg',
                        job_title: 'Back-end Developer',
                    },
                ],
                applicants: [
                    {
                        applicant_id: 1,
                        name: 'Louisa Allen',
                        title: 'Software Engineering Student',
                        city: 'Kuala Lumpur',
                        applied_timestamp: '17/1/2022 9:05a.m.'
                    },
                    {
                        applicant_id: 2,
                        name: 'Sierra Jean',
                        title: 'Software Engineering Student',
                        city: 'Kuala Lumpur',
                        applied_timestamp: '17/1/2022 8:50a.m.'
                    },
                    {
                        applicant_id: 3,
                        name: 'Luke Jones',
                        title: 'Software Engineering Student',
                        city: 'Selangor',
                        applied_timestamp: '16/1/2022 9:05p.m.'
                    },
                ],
            }
        }
    })
</script>

<style scoped>
.applicant-container {
    grid-template-columns: repeat(auto-fit, 370px);
}
</style>