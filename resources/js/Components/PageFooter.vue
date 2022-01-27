<template>
  <footer class="border-t border-zinc-200 max-w-2xl mx-auto py-16 px-4 sm:py-20 sm:px-6 md:max-w-7xl md:px-8 md:py-10">
      <div class="px-10 py-10 grid gap-10 md:grid-cols-2">
        <div class="mx-auto text-center md:text-left">
          <a 
          class="flex items-center justify-center text-4xl font-bold"
          href="/">
              <img 
              src="/img/EmployeEz.png" 
              class="footer-logo"
              alt="" />
          </a>
          <div class="flex justify-center mt-4">
            <a
            href=""
            class="text-2xl text-blue-600 hover:text-blue-800 fill-current">
              <font-awesome-icon :icon="facebookIcon" />
            </a>
            <a
            href=""
            class="ml-3 text-2xl text-pink-400 hover:text-pink-600 fill-current">
              <font-awesome-icon :icon="instaIcon" />
            </a>
            <a
            href=""
            class="ml-3 text-2xl text-blue-300 hover:text-blue-500 fill-current">
              <font-awesome-icon :icon="twitterIcon" />
            </a>
            <a
            href=""
            class="ml-3 text-2xl text-blue-500 hover:text-blue-700 fill-current">
              <font-awesome-icon :icon="linkedInIcon" />
            </a>
          </div>
        </div>
        <div>
          <div class="w-full px-4 md:w-1/2 text-center md:text-left">
            <h2 class="mb-2 font-bold tracking-widest text-gray-900">
              Navigations
            </h2>
            <ul class="mb-8 space-y-2 text-sm list-none">
              <li>
                <a 
                href="/"
                class="text-gray-600 hover:text-gray-800">Home</a>
              </li>
              <li>
                <a
                href="/about" 
                class="text-gray-600 hover:text-gray-800">About Us</a>
              </li>
              <li>
                <a 
                href="/jobs"
                class="text-gray-600 hover:text-gray-800">Jobs</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="justify-center text-center">
        <p class="text-base text-gray-400">
          All rights reserved by &copy; EmployeEz 2022
        </p>
      </div>
    </footer>
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
        FontAwesomeIcon
    }
}
</script>

<style scoped>
.footer-logo {
  width: 80px;
}
</style>