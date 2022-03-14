<template>
    <Head title="Log in" />

    <jet-authentication-card
    svg="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/multitasking_hqg3.svg"
    text="Great to see you again!">
        <template #logo>
            <jet-authentication-card-logo />
        </template>

        <jet-validation-errors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <!-- SignUp Header -->
        <div class="mb-4">
            <h1 class="text-3xl text-blue-900 font-black mb-2">Log In</h1>
            <span class="text-sm text-blue-900 font-medium">Don't have an account?</span>
            <Link :href="route('register')" class="font-bold text-sm text-red-400 hover:text-gray-900 pl-2">
                Sign up here
            </Link>
        </div>

        <form @submit.prevent="submit">
            <div>
                <jet-label for="email" value="Email" />
                <jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus />
            </div>

            <div class="mt-4">
                <jet-label for="password" value="Password" />
                <jet-input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <jet-checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-6 mb-6">
                <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Forgot your password?
                </Link>

                <jet-button class="ml-4 rounded-3xl px-16 py-4" 
                :class="{ 'opacity-25': form.processing }" 
                :disabled="form.processing">
                    Log in
                </jet-button>
            </div>
        </form>

        <!-- Linebreak -->
        <h2>
            <span class="linebreak">or</span>
        </h2>

        <div>
            <p class="text-center text-blue-900 font-black">Log in with</p>
            <div class="flex justify-center px-2 mt-4">
                <a type="button" href="google/auth">
                    <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-3 px-4 mx-1 rounded-full">
                        <font-awesome-icon :icon="googleIcon" />
                    </button>
                </a>
                <a type="button" href="linkedin/auth">
                    <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-3 px-4 mx-1 rounded-full">
                        <font-awesome-icon :icon="linkedInIcon" />
                    </button>
                </a>
                <a type="button" href="github/auth">
                    <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-3 px-4 mx-1 rounded-full">
                        <font-awesome-icon :icon="githubIcon" />
                    </button>
                </a>
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
            Head,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Link,
            FontAwesomeIcon
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                }),
                linkedInIcon: faLinkedin,
                googleIcon: faGoogle,
                githubIcon: faGithub
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    })
</script>
<style scoped>
/* The line break below log in form*/
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
</style>