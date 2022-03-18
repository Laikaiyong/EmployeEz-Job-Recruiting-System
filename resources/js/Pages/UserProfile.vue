<template>
    <Head :title="$page.props.selectedUser[0].name"></Head>
    <page-header v-if="$page.props.user"></page-header>
    <unauth-header v-else canLogin=canLogin canRegister=canRegister></unauth-header>
    <profile-header></profile-header>
    <bio-section></bio-section>

    <!-- Recruiter / Company -->
    <template v-if="$page.props.selectedUser[0].current_team_id == 2">

    </template>

    <!-- Job Seeker -->
    <template v-else-if="$page.props.selectedUser[0].current_team_id == 3">

    </template>
    
    <!-- Admin -->
    <template v-else>
        <!-- <job-function></job-function> -->
    </template>
    <contact-details></contact-details>
    <page-footer></page-footer>
</template>

<script>
    import { defineComponent } from 'vue';
    import UnauthHeader from '@/Components/UnauthHeader.vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import ProfileHeader from '@/Components/Profile/ProfileHeader.vue';
    import BioSection from '@/Components/Profile/BioSection.vue';
    import ContactDetails from '@/Components/Profile/ContactDetails.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            PageHeader,
            UnauthHeader,
            ProfileHeader,
            BioSection,
            ContactDetails,
            PageFooter,
            Head
        }
    })
</script>

<style>

</style>