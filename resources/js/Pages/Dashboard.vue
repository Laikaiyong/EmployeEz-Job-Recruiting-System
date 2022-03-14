<template>
  <Head title="Dashboard"></Head>
  <page-header></page-header>
      <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div style="max-width: 300px">
                      <vue3-chart-js v-bind="{ ...pieChart }" />
                    </div>
              </div>
          </div>
      </div>
  <page-footer></page-footer>
</template>

<script>
import PageHeader from '@/Components/PageHeader.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
import { defineComponent } from 'vue';
import Vue3ChartJs from "@j-t-mcc/vue3-chartjs";

export default defineComponent({
  components: {
    PageHeader,
    PageFooter,
    Head,
    Vue3ChartJs
  },
  setup() {
    const pieChart = {
      type: "pie",
      data: {
        labels: ["VueJs", "EmberJs", "ReactJs", "AngularJs"],
        datasets: [
          {
            backgroundColor: ["#41B883", "#E46651", "#00D8FF", "#DD1B16"],
            data: [40, 20, 80, 10],
          },
        ],
      },
    };

    return { 
      pieChart
    }
  },
})
</script>
