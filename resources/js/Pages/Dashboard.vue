<template>
  <app-layout title="Dashboard">
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </template>
  <dashboard-main></dashboard-main>
  <page-footer></page-footer>
  </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import PageFooter from '@/Components/PageFooter.vue';
import DashboardMain from '@/Components/Dashboard/DashboardMain.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { defineComponent } from 'vue';

export default defineComponent({
  components: {
    AppLayout,
    PageFooter,
    DashboardMain,
    Head
  }
})
</script>
