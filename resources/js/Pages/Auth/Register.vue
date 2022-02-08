<template>
    <Head title="Register" />
    <register-main></register-main>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import  RegisterMain  from '@/Jetstream/SignUpPage/RegisterMain.vue'

    export default defineComponent({
        components: {
            Head,
            RegisterMain,
            Link,
        },
    })
</script>
