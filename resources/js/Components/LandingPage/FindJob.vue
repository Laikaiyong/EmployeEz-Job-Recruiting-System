<template>
    <div class="my-10 py-10">
        <h1 class="font-extrabold text-center text-3xl">Find your dream job</h1>
        <div class="mt-4">
            <slider-menu :sectors="sectors" :isJob="true"></slider-menu>
            <div class="max-w-2xl mx-auto lg:max-w-7xl lg:px-8">
                <div class="px-10 pt-10 pb-4 grid gap-10 md:grid-cols-2 lg:grid-cols-3">
                    <div 
                    v-for="job in $page.props.jobs" 
                    :key="job.id" 
                    class="max-w-xs w-64 rounded-lg overflow-hidden shadow-lg hover:scale-105 transition duration-500 cursor-pointer place-self-center mb-10">
                        <div
                        class="mx-2 mb-2 mt-3">
                            <img 
                            v-if="job.cover_image_url != null"
                            :src="job.cover_image_url" 
                            style="max-height: 125px;"
                            class="w-full h-2/5 my-auto object-cover rounded-t-3xl">
                            <img 
                            v-else 
                            src="/img/EmployeEz banner.png"
                            class="w-full h-2/5 my-auto object-cover rounded-t-3xl"
                            style="max-height: 125px;">
                        </div>
                        <div class="w-full basis-2/5 my-auto">
                            <div class="mx-4 mb-4 px-4 my-4">
                                <h2 class="font-bold"> {{ job.title }} </h2>
                                <p class="text-gray-500"> {{ job.company }} </p>
                            </div>

                            <div class="text-sm text-gray-500 mx-4 px-4">
                                <div>
                                    <img 
                                    src="https://www.svgrepo.com/show/156159/location.svg" 
                                    alt="Location Logo"
                                    width="20"
                                    height="20"
                                    class="inline">
                                    <span class="mx-4"> {{ job.location }} </span>   
                                </div>
                                <div class="mt-4">
                                    <img 
                                    src="https://www.svgrepo.com/show/16795/briefcase.svg" 
                                    alt="Sector Logo"
                                    width="20"
                                    height="20"
                                    class="inline">
                                    <span class="mx-4"> {{ job.industry }} </span>
                                </div>
                                <div class="mt-4">
                                    <img 
                                    src="https://www.svgrepo.com/show/21938/time.svg" 
                                    alt="Job Type Logo"
                                    width="20"
                                    height="20"
                                    class="inline">
                                    <span class="mx-4"> {{ job.type }} </span>
                                </div>
                            </div>
                        </div>

                        <!-- Apply Button -->
                        <div class="py-6 w-full basis-1/5 flex text-center justify-center my-auto" >
                            <a class="w-1/2 h-fit bg-blue-900 hover:opacity-80 text-sm text-white rounded-xl shadow-lg p-2" :href="route('jobs.profile', { id: job.id })" >
                                <button>View Details</button>
                            </a>
                        </div>
                    </div>
                    <a :href="route('jobs')"
                    class="invisible h-0 md:visible md:mb-10 md:grid md:h-[386.35px] md:flex lg:invisible lg:m-0 lg:h-0 max-w-xs w-64 rounded-lg overflow-hidden shadow-lg hover:scale-105 transition duration-500 cursor-pointer place-self-center place-content-center font-bold text-xl bg-gray-300">See more</a>
                </div>
            </div>
            <!-- Show more job button -->
            <a :href="route('jobs')" class="visible h-10 mb-20 md:invisible md:h-0 lg:visible lg:h-10 flex justify-center lg:mb-10">
                <button class="w-fit bg-sky-400 hover:bg-sky-500 font-bold text-white rounded-xl shadow-md px-8 py-2">See more</button>
            </a>
        </div>
    </div>
</template>

<script>
import SliderMenu from '@/Components/LandingPage/SliderMenu.vue';

export default {
    components: {
        SliderMenu
    },
    data() {
        return {
            sectors: [
                'Technology',
                'Engineering',
                'Business',
                'Design'
            ],
        }
    }
}
</script>

<style scoped>

</style>