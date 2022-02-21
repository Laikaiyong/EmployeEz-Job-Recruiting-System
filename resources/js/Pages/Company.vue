<template>
  <div style="max-width: 400px">
    <vue3-chart-js v-bind="{ ...pieChart }" />
  </div>
  <GoogleMap
  :api-key="apiKey"
  style="width: 100%; height: 500px"
  :center="center"
  :zoom="15"
  >
    <Marker :options="{ position: center }" />
  </GoogleMap>
</template>

<script>
import { defineComponent } from 'vue'
import { GoogleMap, Marker } from 'vue3-google-map'
import Vue3ChartJs from "@j-t-mcc/vue3-chartjs";

export default defineComponent({
  components: { 
    GoogleMap, 
    Marker,
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
    const center = { lat: 40.689247, lng: -74.044502 }
    const apiKey = process.env.GOOGLE_MAP_KEY

    return { 
      center,
      pieChart,
      apiKey
    }
  },
})
</script>

<style scoped>
</style>