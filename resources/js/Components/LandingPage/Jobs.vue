<template>
    <div>
        <!-- Category Sliders -->
        <div class="flex justify-center items-center max-w-7xl mx-auto my-4 py-4">
            <div class="flex justify-content align-items basis-1/12">
                <button @click="previousSlide(isJob)" class="w-full text-xl text-white text-black">&#x276E;</button>
            </div>
            <!-- Categories' Bars -->
            <div class="basis-10/12 overflow-hidden relative">
                <div class="w-full absolute inset-x-0 flex transition-all ease-in-out duration-1000 transform translate-x-0" :class="isJob ? 'slide-job' : 'slide-recruiter'">
                    <div class="w-2/3 bg-blue-200 shadow-lg rounded-lg mx-4 px-2 py-2 " v-for="sector in sectors">
                        <div class="text-sm text-center text-blue-800 font-bold">
                            <a href="#"> {{ sector }} </a>
                        </div>
                    </div>
                </div>

                <div class="w-full absolute inset-x-0 flex transition-all ease-in-out duration-1000 transform translate-x-full" :class="isJob ? 'slide-job' : 'slide-recruiter'">
                    <div class="w-2/3 bg-blue-200 shadow-lg rounded-lg mx-4 px-2 py-2 " v-for="sector in sectors">
                        <div class="text-sm text-center text-blue-800 font-bold">
                            <a href="#"> {{ sector }} </a>
                        </div>
                    </div>
                </div>

                <div class="w-full flex transition-all ease-in-out duration-1000 transform translate-x-full" :class="isJob ? 'slide-job' : 'slide-recruiter'">
                    <div class="w-2/3 bg-blue-200 shadow-lg rounded-lg mx-4 px-2 py-2 " v-for="sector in sectors">
                        <div class="text-sm text-center text-blue-800 font-bold">
                            <a href="#"> {{ sector }} </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-content align-items basis-1/12">
                <button @click="nextSlide(isJob)" class="w-full text-xl text-white text-black">&#x276F;</button>
            </div>
        </div>
        <!-- Job Cards -->
        <div class="mt-4">
            <div class="grid gap-y-10 lg:grid-cols-3 max-w-7xl mx-auto my-4 px-4">
                <div class="w-3/4 h-full flex flex-col justify-center items-center place-self-center shadow-lg rounded-3xl" v-for="job in jobs">
                    <!-- Company Banner -->
                    <img 
                    :src="job.company_banner" 
                    alt="Company Image"
                    class="w-full h-2/5 my-auto object-cover rounded-t-3xl">
                    
                    <!-- Company / Job Info -->
                    <div class="w-full basis-2/5 my-auto">
                        <div class="mx-4 mb-4 px-4 my-4">
                            <h2 class="font-bold"> {{ job.job_position }} </h2>
                            <p :class="isJob ? 'text-gray-500' : 'font-bold'"> {{ job.company }} </p>
                            <p v-show="!isJob" class="text-gray-500">{{ job.job_sector }}</p>
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
                            <div class="mt-4" v-show="isJob">
                                <img 
                                src="https://www.svgrepo.com/show/16795/briefcase.svg" 
                                alt="Sector Logo"
                                width="20"
                                height="20"
                                class="inline">
                                <span class="mx-4"> {{ job.job_sector }} </span>
                            </div>
                            <div class="mt-4" v-show="isJob">
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
                    <div 
                    class="w-full basis-1/5 flex justify-center py-2 my-auto" 
                    :class="!isJob ? 'mb-2' : 'mt-2'">
                        <button class="w-1/2 h-fit bg-blue-900 hover:opacity-80 text-sm text-white rounded-xl shadow-lg p-2">{{ isJob ? 'Apply Now' : 'View Company' }}</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Show more job button -->
        <div class="flex justify-center mt-8">
            <button class="w-fit bg-sky-400 hover:bg-sky-500 font-bold text-white rounded-xl shadow-md px-8 py-2">See more</button>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        sectors: Array,
        jobs: Array,
        isJob: Boolean
    },
    methods: {
        nextSlide(isJob) {
            if (isJob) {
                var activeSlide = document.querySelector('.slide-job.translate-x-0');
            } else {
                var activeSlide = document.querySelector('.slide-recruiter.translate-x-0');
            }
                
            let nextSlide = activeSlide.nextElementSibling;
            if (nextSlide != null) {
                // move current slide to the left
                activeSlide.classList.remove('translate-x-0');
                activeSlide.classList.add('-translate-x-full');

                // move left slide to current position
                nextSlide.classList.remove("translate-x-full");
                nextSlide.classList.add('translate-x-0');
            }
        },
        previousSlide(isJob) {
            if (isJob) {
                var activeSlide = document.querySelector('.slide-job.translate-x-0');
            } else {
                var activeSlide = document.querySelector('.slide-recruiter.translate-x-0');
            }
            
            let previousSlide = activeSlide.previousElementSibling;

            if (previousSlide != null) {
                // move current slide to right
                activeSlide.classList.remove('translate-x-0');
                activeSlide.classList.add('translate-x-full');

                // move previous slide to current position
                previousSlide.classList.remove("-translate-x-full");
                previousSlide.classList.add('translate-x-0');
            }  
        },
    }
}
</script>

<style scoped>

</style>