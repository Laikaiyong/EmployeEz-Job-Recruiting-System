<template>
    <div class="relative bg-white overflow-hidden">
        <welcome-banner canLogin=canLogin canRegister=canRegister />
        <welcome-main />
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import WelcomeBanner from '@/Jetstream/LandingPage/WelcomeBanner.vue';
    import WelcomeMain from '@/Jetstream/LandingPage/WelcomeMain.vue';

    export default defineComponent({
        components: {
            WelcomeBanner,
            WelcomeMain
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