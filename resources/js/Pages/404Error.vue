<template>
    <Head title="Company"></Head>
    <page-header v-if="$page.props.user"></page-header>
    <unauth-header v-else canLogin=canLogin canRegister=canRegister></unauth-header>
    <div class="max-w-7xl mx-auto mt-20 mb-20 container">
        <div class="row text-center">
            <div class="text-center col">
            <div style="background-repeat: no-repeat; background-image: url('/img/404 background.png'); background-size: 400px 300px; background-position: center;">
                <h1 class="pt-40 text-9xl" style="font-family: 'Architects Daughter'">404</h1>
            </div>
            <p class="font-bold text-2xl">Oops, something's missing</p>
            <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold my-10 py-3 px-4 rounded-xl">
                <a href="{{ URL::to('/') }}">Back to Main Menu</a>
            </button>
            </div>
        </div>
    </div>
    <page-footer></page-footer>
</template>

<script>
    import { defineComponent } from 'vue';
    import UnauthHeader from '@/Components/UnauthHeader.vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            PageHeader,
            UnauthHeader,
            PageFooter,
            Head
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean
        }
    })
</script>

<style scoped>

</style>