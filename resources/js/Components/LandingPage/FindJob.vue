<template>
    <div class="my-10 py-10">
        <h1 class="font-extrabold text-center text-3xl">Find your dream job</h1>
        <div class="mt-4">
            <jobs-cards :sectors="sectors" :jobs="jobs" isJob />
        </div>
    </div>
</template>

<script>
import JobsCards from '@/Components/LandingPage/Jobs.vue';

export default {
    components: {
        JobsCards
    },
    data() {
        return {
            sectors: [
                'Technology',
                'Engineering',
                'Business',
                'Design'
            ],
            jobs: [
                {
                    company_banner: "https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg",
                    job_position: "Software Engineer",
                    company: "Setel",
                    location: "Kuala Lumpur",
                    job_sector: "Technology",
                    type: "Full-time"
                },
                {
                    company_banner: "https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg",
                    job_position: "Front-end Developer",
                    company: "Setel",
                    location: "Kuala Lumpur",
                    job_sector: "Technology",
                    type: "Full-time"
                },
                {
                    company_banner: "https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg",
                    job_position: "Back-end Developer",
                    company: "Setel",
                    location: "Kuala Lumpur",
                    job_sector: "Technology",
                    type: "Full-time"
                }
            ],
        }
    }
}
</script>

<style scoped>

</style>