<template>
  <Head title="Home"></Head>
  <page-header></page-header>
  <top-section :teamId="$page.props.user.current_team.id"></top-section>
  <values-section></values-section>
  <meet-team></meet-team>
  <page-footer></page-footer>
</template>

<script>
import PageHeader from '@/Components/PageHeader.vue';
import TopSection from '@/Components/JobSeekHome/TopSection.vue';
import ValuesSection from '@/Components/JobSeekHome/ValuesSection.vue';
import MeetTeam from '@/Components/JobSeekHome/MeetTeam.vue';
import PageFooter from '@/Components/PageFooter.vue';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        PageHeader,
        TopSection,
        ValuesSection,
        MeetTeam,
        PageFooter,
        Head
    },
    props: {
      
    }
}
</script>

<style scoped>

</style>