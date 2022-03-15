<template>
    <Head :title="$page.props.selectedUser[0].name"></Head>
    <page-header v-if="$page.props.user"></page-header>
    <unauth-header v-else canLogin=canLogin canRegister=canRegister></unauth-header>
    <profile-header></profile-header>
    <page-footer></page-footer>
</template>

<script>
    import { defineComponent } from 'vue';
    import UnauthHeader from '@/Components/UnauthHeader.vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import ProfileHeader from '@/Components/Profile/ProfileHeader.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            PageHeader,
            UnauthHeader,
            ProfileHeader,
            PageFooter,
            Head
        }
    })
</script>

<style>

</style>