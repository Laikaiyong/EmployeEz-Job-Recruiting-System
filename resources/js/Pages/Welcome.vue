<template>
    <page-header canLogin=canLogin canRegister=canRegister />
    <div class="relative bg-white">
        <welcome-main />
    </div>
    <welcome-testimonial />
    <more-info />
    <find-job />
    <find-employer />
    <enquiry-section />
    <get-started />
    <page-footer />
</template>

<script>
    import { defineComponent } from 'vue';
    import PageHeader from '@/Components/UnauthHeader.vue';
    import WelcomeMain from '@/Components/LandingPage/WelcomeMain.vue';
    import WelcomeTestimonial from '@/Components/LandingPage/Testimonial.vue';
    import MoreInfo from '@/Components/LandingPage/MoreInfo.vue';
    import FindJob from '@/Components/LandingPage/FindJob.vue';
    import FindEmployer from '@/Components/LandingPage/Employers.vue';
    import EnquirySection from '@/Components/LandingPage/EnquirySection.vue'
    import GetStarted from '@/Components/LandingPage/GetStarted.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    export default defineComponent({
        components: {
            PageHeader,
            WelcomeMain,
            WelcomeTestimonial,
            MoreInfo,
            FindJob,
            FindEmployer,
            EnquirySection,
            GetStarted,
            PageFooter
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })
</script>

<style scoped>
</style>