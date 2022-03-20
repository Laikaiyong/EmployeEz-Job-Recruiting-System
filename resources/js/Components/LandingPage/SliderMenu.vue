<template>
    <div>
        <!-- Category Sliders -->
        <div class="flex justify-center items-center max-w-7xl mx-auto my-4 py-4">
            <div class="flex justify-content align-items basis-1/12">
                <button @click="previousSlide(isJob)" class="w-full text-xl text-white text-black">&#x276E;</button>
            </div>
            <!-- Categories' Bars -->
            <div class="basis-10/12 overflow-hidden relative" >
                <div class="w-full absolute inset-x-0 flex transition-all ease-in-out duration-1000 transform translate-x-0" :class="isJob ? 'slide-job' : 'slide-recruiter'">
                    <div class="w-2/3 bg-blue-200 shadow-lg rounded-lg mx-4 px-2 py-2 " :key="sector" v-for="sector in sectors">
                        <div class="text-sm text-center text-blue-800 font-bold">
                            <a href="#"> {{ sector }} </a>
                        </div>
                    </div>
                </div>

                <div class="w-full absolute inset-x-0 flex transition-all ease-in-out duration-1000 transform translate-x-full" :class="isJob ? 'slide-job' : 'slide-recruiter'">
                    <div class="w-2/3 bg-blue-200 shadow-lg rounded-lg mx-4 px-2 py-2 " :key="sector" v-for="sector in sectors">
                        <div class="text-sm text-center text-blue-800 font-bold">
                            <a href="#"> {{ sector }} </a>
                        </div>
                    </div>
                </div>

                <div class="w-full flex transition-all ease-in-out duration-1000 transform translate-x-full" :class="isJob ? 'slide-job' : 'slide-recruiter'">
                    <div class="w-2/3 bg-blue-200 shadow-lg rounded-lg mx-4 px-2 py-2 " :key="sector" v-for="sector in sectors">
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
    </div>
</template>

<script>
export default {
    props: {
        sectors: Array,
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