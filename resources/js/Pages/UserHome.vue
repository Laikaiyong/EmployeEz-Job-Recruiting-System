<template>
  <Head title="Home"></Head>
  <page-footer></page-footer>
</template>

<script>
import PageFooter from '@/Components/PageFooter.vue';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        PageFooter,
        Head
    },
    props: {
      
    }
}
</script>

<style scoped>

</style>