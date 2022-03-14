<template>
    <jet-authentication-card 
    svg="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/career_progress_ivdb.svg"
    text="Start your job hunting journey with us!">
        
        <template #logo>
            <jet-authentication-card-logo />
        </template>
        <jet-validation-errors class="mb-4" />

        <!-- Switch Tabs -->
        <!-- <div class="flex flex-row justify-around mb-3">  
            <div>
                <button 
                type="button" 
                :class="isJobSeeker ? 'border-b-4 border-black-900 font-bold py-2 px-4' : 'transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:border-b-2 hover:border-black-700 font-bold py-2 px-4'"
                @click="toggleJobSeekerButton">
                    Job Seeker
                </button>
            </div>
        
            <div>
                <button 
                type="button"
                :class="!isJobSeeker ? 'border-b-4 border-black-900 font-bold py-2 px-4' : 'transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:border-b-2 hover:border-black-700 font-bold py-2 px-4'"
                @click="toggleJobSeekerButton">
                    Recruiter
                </button>
            </div>
        </div> -->

        <!-- Select role form -->
        <div class="text-center" v-show="role === ''">
            <h1 class="text-3xl font-bold mt-4 mb-6">Who are you registering as?</h1>
            <div class="flex flex-col justify-center items-center mt-6 mb-4">
                <button 
                class="bg-blue-800 hover:bg-blue-900 rounded-lg shadow-md text-xl text-white font-bold w-2/3 px-4 py-4 mb-4"
                @click="
                    this.role = 'Job Seeker'; 
                    this.isRecruiter = false;
                    this.form.role = this.role;
                " >Job Seeker</button>
                
                <button 
                class="bg-blue-800 hover:bg-blue-900 rounded-lg shadow-md text-xl text-white font-bold w-2/3 px-4 py-4 mt-4"
                @click="
                    this.role = 'Recruiter'; 
                    this.isRecruiter = true;
                    this.form.role = this.role;
                ">Recruiter</button>
            </div>
        </div>

        <!-- SignUp Header -->
        <div class="mb-4" v-show="role != ''">
            <h1 class="text-3xl text-blue-900 font-black mb-2">Sign Up</h1>
            <span class="text-sm text-blue-900 font-medium">Already have an account?</span>
            <Link :href="route('login')" class="font-bold text-sm text-red-400 hover:text-gray-900 pl-2">
                Log in here
            </Link>
        </div>

        <!-- Content in SignUp Form for Job Seeker -->
        <div v-show="role != ''">
            <form @submit.prevent="submit">
                <!-- Form Input -->
                <div class="mt-4">
                    <jet-label for="name" value="Name" />
                    <jet-input 
                    id="name" 
                    type="text" 
                    class="mt-1 block w-full rounded-xl text-sm" 
                    v-model="form.name" 
                    required autofocus autocomplete="name" 
                    placeholder="Enter your name" />
                </div>

                <div class="mt-4">
                    <jet-label for="email" value="Email" />
                    <jet-input 
                    id="email" 
                    type="email" 
                    class="mt-1 block w-full rounded-xl text-sm" 
                    v-model="form.email" 
                    required placeholder="Enter your email"/>
                </div>

                <div class="mt-4">
                    <jet-label for="password" value="Password" />
                    <jet-input 
                    id="password" 
                    type="password" 
                    class="mt-1 block w-full rounded-xl text-sm" 
                    v-model="form.password" 
                    required autocomplete="new-password" 
                    placeholder="Enter your password"/>
                </div>

                <div class="mt-4">
                    <jet-label for="password_confirmation" value="Confirm Password" />
                    <jet-input 
                    id="password_confirmation" 
                    type="password" 
                    class="mt-1 block w-full rounded-xl text-sm" 
                    v-model="form.password_confirmation" 
                    required autocomplete="new-password" 
                    placeholder="Enter your confirm password"/>
                </div>

                <!-- Agreement of T&C -->
                <div class="flex items-center justify-start mt-4" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
                    <jet-label for="terms">
                        <div class="flex items-center">
                            <jet-checkbox class="form-checkbox mr-3" name="terms" id="terms" v-model:checked="form.terms" />

                            <div class="ml-2">
                                I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                            </div>
                        </div>
                    </jet-label>
                </div>
                <!-- <div class="flex items-center justify-start mt-4">
                    <input type="checkbox" class="form-checkbox mr-3" />
                    <span>I agree to the Terms and Conditions.</span>
                </div> -->

                <div class="flex items-center justify-between mt-6 mb-6">
                    <div class="flex justify-center items-center text-base text-gray-600">
                        <span class="md:mx-2">&#x276E;</span> 
                        <button 
                        class="hover:underline mx-2"
                        @click="this.role = ''">Return to select role</button>
                    </div>
                    <jet-button 
                    class="ml-0 rounded-3xl px-16 py-4" 
                    :class="{ 'opacity-25': form.processing }" 
                    :disabled="form.processing">
                        Sign Up
                    </jet-button>
                </div>
            </form>

            <!-- Linebreak -->
            <h2 v-show="role === 'Job Seeker'">
                <span class="linebreak">or</span>
            </h2>

            <!-- Social Auth -->
            <div v-show="role === 'Job Seeker'">
                <p class="text-center text-blue-900 font-black">Sign up with</p>
                <div class="social-auth flex justify-center mt-4">
                    <a type="button" href="google/auth">
                        <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-full">
                            <font-awesome-icon :icon="googleIcon" />
                        </button>
                    </a>
                    <a type="button" href="linkedin/auth">
                        <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-full">
                            <font-awesome-icon :icon="linkedInIcon" />
                        </button>
                    </a>
                    <a type="button" href="github/auth">
                        <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-full">
                            <font-awesome-icon :icon="githubIcon" />
                        </button>
                    </a>
                </div>
            </div>
        </div> 
    </jet-authentication-card>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
    import { 
        faLinkedin,
        faGithub,
        faGoogle
    } from '@fortawesome/free-brands-svg-icons';
    
    export default defineComponent({
        components: {
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            FontAwesomeIcon,
            Link,
        },
        data() {
            return {
                form: this.$inertia.form({
                    role: '',
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    terms: false,
                }),
                role: '',
                isRecruiter: false,
                linkedInIcon: faLinkedin,
                googleIcon: faGoogle,
                githubIcon: faGithub
            }
        },
        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    })
</script>
<style scoped>
/* The line break below sign up form*/
h2 {
    width: 100%;
    text-align: center;
    border-bottom: 1px solid rgba(47, 46, 65, .27);
    line-height: 0.1em;
    margin: 10px 0 20px;
}
h2 .linebreak {
    background: #fff;
    padding: 0 10px;
    color: rgba(47, 46, 65, .27);
}

.social-auth a {
    padding : 0px 5px;
}
</style>