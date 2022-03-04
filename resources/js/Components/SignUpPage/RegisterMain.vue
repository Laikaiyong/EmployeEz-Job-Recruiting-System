<template>
    <jet-authentication-card 
    svg="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/career_progress_ivdb.svg"
    text="Start your job hunting journey with us!">
        
        <template #logo>
            <jet-authentication-card-logo />
        </template>
        <jet-validation-errors class="mb-4" />

        <!-- Content in SignUp Form -->
        <form @submit.prevent="submit" >
            <!-- SignUp Header -->
            <div class="mb-4">
                <h1 class="text-3xl text-blue-900 font-black mb-2">Sign Up</h1>
                <span class="text-sm text-blue-900 font-medium">Already have an account?</span>
                <Link :href="route('login')" class="font-bold text-sm text-red-400 hover:text-gray-900 pl-2">
                    Log in here
                </Link>
            </div>

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

            <div class="mt-6 flex justify-center sm:justify-end mb-6">
                <jet-button 
                class="ml-0 rounded-3xl px-16 py-4" 
                :class="{ 'opacity-25': form.processing }" 
                :disabled="form.processing">
                    Sign Up
                </jet-button>
            </div>
        </form>
            <!-- Linebreak -->
            <h2>
                <span class="linebreak">or</span>
            </h2>

            <!-- Social Auth -->
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
            },
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