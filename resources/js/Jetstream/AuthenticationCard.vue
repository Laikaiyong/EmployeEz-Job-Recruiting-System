<template>
    <div class="min-h-screen flex flex-col sm:flex-row justify-center items-center pt-6 sm:pt-0">

        <!-- Left SVG -->
        <div class="w-5/6 sm:max-w-lg mr-0 sm:mr-4">
            <authentication-card-logo 
            :svg="svg"
            :text="text"></authentication-card-logo>
        </div>

         <!-- SignUp / Login Form -->
        <div class="w-5/6 sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>

<script>
import AuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
export default {
    components: {
        AuthenticationCardLogo,
    },
    props: {
        svg: String,
        text:String,
    },
}
</script>
