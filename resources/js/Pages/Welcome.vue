<template>
    <page-header canLogin=canLogin canRegister=canRegister />
    <div class="relative bg-white">
        <welcome-main />
    </div>
    <welcome-testimonial />
    <more-info />
</template>

<script>
    import { defineComponent } from 'vue';
    import PageHeader from '@/Components/UnauthHeader.vue';
    import WelcomeMain from '@/Components/LandingPage/WelcomeMain.vue';
    import WelcomeTestimonial from '@/Components/LandingPage/Testimonial.vue';
    import MoreInfo from '@/Components/LandingPage/MoreInfo.vue';
    export default defineComponent({
        components: {
            PageHeader,
            WelcomeMain,
            WelcomeTestimonial,
            MoreInfo
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