<template>
  <main class="mt-10 mx-auto max-w-7xl px-4 pb-10 sm:px-6 lg:px-8">
        <div class="sm:text-center lg:text-left">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block">Job seeking</span>
            {{ ' ' }}
            <span class="block text-indigo-600 xl:inline">at your fingertips</span>
        </h1>
        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            The easiest way to get your dream job and enrich your application for employers to find you.
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow mb-10">
            <a href="#" class="w-full flex items-center justify-center px-4 py-4 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:text-lg">
                Get started
            </a>
            </div>
        </div>
        <p class="mb-3">Follow us at</p>
        <button class="bg-indigo-500 mr-2 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-full">
            <font-awesome-icon :icon="facebookIcon" />
        </button>
        <button class="bg-indigo-500 mr-2 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-full">
            <font-awesome-icon :icon="instaIcon" />
        </button>
        <button class="bg-indigo-500 mr-2 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-full">
            <font-awesome-icon :icon="twitterIcon" />
        </button>
        <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-full">
            <font-awesome-icon :icon="linkedInIcon" />
        </button>
        </div>
    </main>
    <!-- <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <div class="h-56 w-full object-cover sm:h-72 md:h-96 lg:h-full" id="main-img-bg">
            <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Job_hunt_re_q203.svg" 
            class="w-5/6 h-5/6 px-8 pt-8"
            alt="">
        </div>
    </div> -->
</template>

<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { 
    faLinkedin, 
    faFacebook, 
    faInstagram,
    faTwitter
} from '@fortawesome/free-brands-svg-icons';
export default {
    data() {
        return {
            facebookIcon: faFacebook,
            instaIcon: faInstagram,
            twitterIcon: faTwitter,
            linkedInIcon: faLinkedin
        }
    },
    components: {
        FontAwesomeIcon,
    }
}
</script>

<style scoped>
#main-img-bg {
    background: linear-gradient(180deg, #ECF2FF 0%, rgba(255, 182, 182, 0.18) 100%);
    border-radius: 30px 0px 0px 30px;
}
</style>