<template>
    <div class="relative bg-white overflow-hidden">
        <page-header canLogin=canLogin canRegister=canRegister />
        <welcome-main />
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import PageHeader from '@/Components/UnauthHeader.vue';
    import WelcomeMain from '@/Components/LandingPage/WelcomeMain.vue';

    export default defineComponent({
        components: {
            PageHeader,
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