<template>
    <div>
      <div class="max-w-2xl mx-auto py-8 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:py-10 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
        <div class="grid">
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
                    <a href="/register" class="w-full flex items-center justify-center px-4 py-4 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:text-lg">
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
        </div>
        <div id="main-img-bg" class="flex object-cover text-center max-h-0 invisible lg:max-h-full lg:h-full lg:max-w-full lg:w-full lg:visible">
            <img 
            src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Job_hunt_re_q203.svg" 
            class="mx-auto my-auto w-5/6 xl:w-4/6"
            alt="">
        </div>
    </div>
  </div>
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
    border-radius: 30px;
}
</style>