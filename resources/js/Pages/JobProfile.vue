<template>
    <Head :title="'Profile : '+$page.props.selectedJob.title"></Head>
    <page-header v-if="$page.props.user"></page-header>
    <unauth-header v-else canLogin=canLogin canRegister=canRegister></unauth-header>
    <profile-main></profile-main>
    <page-footer></page-footer>
</template>

<script>
    import { defineComponent } from 'vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import UnauthHeader from '@/Components/UnauthHeader.vue';
    import ProfileMain from '@/Components/Jobs/ProfileMain.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            PageHeader,
            UnauthHeader,
            ProfileMain,
            PageFooter,
            Head
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean
        },
    })
</script>

<style scoped>
</style>