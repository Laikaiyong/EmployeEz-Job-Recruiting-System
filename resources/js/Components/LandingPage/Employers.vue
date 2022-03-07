<template>
    <div class="my-10 py-10">
        <h1 class="font-extrabold text-center text-3xl">Find your ideal employer</h1>
        <div class="mt-4">
            <jobs-cards :sectors="sectors" :jobs="employers" :isJob="false" />
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
            employers: [
                {
                    company_banner: "https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg",
                    company: "Setel",
                    location: "Kuala Lumpur",
                    job_sector: "Technology",
                },
                {
                    company_banner: "https://assets.theedgemarkets.com/Maybank-3_20171215091441_reuters.jpg",
                    company: "Maybank",
                    location: "Kuala Lumpur",
                    job_sector: "Finance",
                },
                {
                    company_banner: "https://assets.nst.com.my/images/articles/16bt13intel_1639623894.jpg",
                    company: "Intel Corporation",
                    location: "Bayan Lepas",
                    job_sector: "Technology",
                }
            ],
        }
    }
}
</script>

<style>

</style>