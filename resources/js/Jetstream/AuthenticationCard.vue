<template>
    <div class="min-h-screen flex flex-row flex-wrap justify-center items-center">
        <!-- SVG -->
        <div class="w-5/6 sm:max-w-lg mr-0 sm:mr-4">
            <authentication-card-logo 
            :svg="svg"
            :text="text"></authentication-card-logo>
        </div>
        
         <!-- SignUp / Login Form -->
        <div class="w-5/6 sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <!-- Switch Tabs -->
            <div class="flex flex-row justify-around mb-3">  
                <div>
                    <button 
                    type="button" 
                    :class="position === 'job seeker' ? 'border-b-4 border-black-900 font-bold py-2 px-4' : 'font-bold py-2 px-4'"
                    @click="toggleJobSeekerButton">
                        Job Seeker
                    </button>
                </div>
            
                <div>
                    <button 
                    type="button"
                    :class="position === 'recruiter' ? 'border-b-4 border-black-900 font-bold py-2 px-4' : 'font-bold py-2 px-4'"
                    @click="toggleRecruiterButton">
                        Recruiter
                    </button>
                </div>
            </div>
            
            <!-- The login/signup form -->
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
    data() {
        return {
            position: 'job seeker',
        }
    },
    props: {
        svg: String,
        text:String,
    },
    methods: {
        toggleJobSeekerButton() {
            if (this.position === 'recruiter')
                this.position = 'job seeker';
        },
        toggleRecruiterButton() {
            if (this.position === 'job seeker')
                this.position = 'recruiter';
        },
    },
}
</script>