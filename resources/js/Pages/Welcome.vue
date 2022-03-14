<template>
    <Head title="Home"></Head>
    <page-header v-if="$page.props.user"></page-header>
    <unauth-header v-else canLogin=canLogin canRegister=canRegister></unauth-header>
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
    import UnauthHeader from '@/Components/UnauthHeader.vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import WelcomeMain from '@/Components/LandingPage/WelcomeMain.vue';
    import WelcomeTestimonial from '@/Components/LandingPage/Testimonial.vue';
    import MoreInfo from '@/Components/LandingPage/MoreInfo.vue';
    import FindJob from '@/Components/LandingPage/FindJob.vue';
    import FindEmployer from '@/Components/LandingPage/Employers.vue';
    import EnquirySection from '@/Components/LandingPage/EnquirySection.vue'
    import GetStarted from '@/Components/LandingPage/GetStarted.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            PageHeader,
            UnauthHeader,
            WelcomeMain,
            WelcomeTestimonial,
            MoreInfo,
            FindJob,
            FindEmployer,
            EnquirySection,
            GetStarted,
            PageFooter,
            Head
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean
        }
    })
</script>

<style scoped>
</style>