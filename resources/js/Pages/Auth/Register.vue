<template>
    <Head title="Register" />
    <register-main></register-main>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
    import { RegisterMain } from '@/Jetstream/SignUpPage/RegisterMain.vue'
    import { 
        faLinkedin,
        faGithub,
        faGoogle
    } from '@fortawesome/free-brands-svg-icons';

    export default defineComponent({
        components: {
            Head,
            RegisterMain,
            Link,
            FontAwesomeIcon
        },

        // data() {
        //     return {
        //         form: this.$inertia.form({
        //             name: '',
        //             email: '',
        //             password: '',
        //             password_confirmation: '',
        //             terms: false,
        //         }),
        //         linkedInIcon: faLinkedin,
        //         googleIcon: faGoogle,
        //         githubIcon: faGithub
        //     }
        // },

        // methods: {
        //     submit() {
        //         this.form.post(this.route('register'), {
        //             onFinish: () => this.form.reset('password', 'password_confirmation'),
        //         })
        //     }
        // }
    })
</script>
