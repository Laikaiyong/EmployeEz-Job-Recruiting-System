<template>
    <Head title="Company"></Head>
    <page-header v-if="$page.props.user"></page-header>
    <unauth-header v-else canLogin=canLogin canRegister=canRegister></unauth-header>
    <company-main></company-main>
    <page-footer></page-footer>
</template>

<script>
    import { defineComponent } from 'vue';
    import UnauthHeader from '@/Components/UnauthHeader.vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import CompanyMain from '@/Components/Company/CompanyMain.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            PageHeader,
            UnauthHeader,
            CompanyMain,
            PageFooter,
            Head
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean
        }
    })
</script>

<style>

</style>