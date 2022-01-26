<template>
    <Head title="Register" />
    <register-main></register-main>
    
</template>

<script>
    import { defineComponent } from 'vue'
    import RegisterMain from '@/Jetstream/SignUpPage/RegisterMain.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    

    export default defineComponent({
        components: {
            Head,
            RegisterMain,
            Link,
        },
        props: {},
    })
</script>
