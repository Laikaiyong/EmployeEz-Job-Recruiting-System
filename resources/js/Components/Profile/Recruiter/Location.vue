<template>
    <div class="max-w-7xl mx-10 pb-20 sm:px-6 lg:px-8 lg:mx-0">
        <div class="lg:ml-10 xl:ml-32 pt-10 bg-slate-50 rounded-xl overflow-hidden shadow-lg">
            <h1 class="ml-6 text-xl font-bold pb-6 lg:pt-0 flex items-center justify-center lg:justify-start">Location</h1>
            <GoogleMap
            :api-key="apiKey"
            style="width: 100%; height: 500px"
            :center="center"
            :zoom="15"
            >
                <Marker :options="{ position: center }" />
            </GoogleMap>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import { GoogleMap, Marker } from 'vue3-google-map'

export default defineComponent({
  components: { 
    GoogleMap, 
    Marker
  },
  data() {
    const center = { 
        lat: parseFloat(this.$page.props.selectedUser[0].latitude), 
        lng: parseFloat(this.$page.props.selectedUser[0].longitude), 
    }
    const apiKey = process.env.GOOGLE_MAP_KEY

    return { 
      center,
      apiKey
    }
  },
})
</script>

<style scoped>
</style>