<template>
  <Head title="Home"></Head>
  <page-header v-if="$page.props.user"></page-header>
  <unauth-header v-else canLogin=canLogin canRegister=canRegister></unauth-header>
  <div class="relative bg-white">
      <welcome-main />
  </div>
  <page-footer></page-footer>
</template>

<script>
import PageHeader from '@/Components/PageHeader.vue';
import UnauthHeader from '@/Components/UnauthHeader.vue';
import PageFooter from '@/Components/PageFooter.vue';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        PageHeader,
        UnauthHeader,
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