<template>
  <Head title="About Us"></Head>
  <page-header v-if="$page.props.user"></page-header>
  <unauth-header v-else canLogin=canLogin canRegister=canRegister></unauth-header>
  <top-section></top-section>
  <values-section></values-section>
  <meet-team></meet-team>
  <page-footer></page-footer>
</template>

<script>
import PageHeader from '@/Components/About/PageHeader.vue';
import UnauthHeader from '@/Components/UnauthHeader.vue';
import TopSection from '@/Components/About/TopSection.vue';
import ValuesSection from '@/Components/About/ValuesSection.vue';
import MeetTeam from '@/Components/About/MeetTeam.vue';
import PageFooter from '@/Components/PageFooter.vue';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        PageHeader,
        UnauthHeader,
        TopSection,
        ValuesSection,
        MeetTeam,
        PageFooter,
        Head
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    }
}
</script>

<style scoped>
</style>