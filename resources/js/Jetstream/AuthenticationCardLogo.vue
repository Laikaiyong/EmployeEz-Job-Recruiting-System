<template>
    <div>
        <a href="/">
            <img src="/img/EmployeEz.png" 
                alt="EmployeEz Logo" 
                class="h-8 w-auto sm:h-16">
        </a>
        
        <p class="w-2/3 font-black text-2xl text-blue-900 my-5 mt-8"> 
            {{ text }} 
        </p>
        
        <img :src="svg"
        class="pr-8 mt-8">
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
        props: {
            svg: String,
            text: String,
        },
    })
</script>