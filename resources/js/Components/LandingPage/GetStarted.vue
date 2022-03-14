<template>
    <div id="get-started-banner" class="rounded-lg text-center">
        <div class="py-24">
            <h3 class="text-2xl text-indigo-900 font-extrabold">
                Let employers find you 
            </h3>
            <div class="rounded-lg px-4 mt-8">
                <a :href="route('register')" class="px-4 py-4 border border-transparent text-base font-medium shadow-md rounded-2xl text-white bg-rose-400 hover:bg-rose-500 md:text-lg sm:text-md">
                    Sign up for free
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
#get-started-banner {
    background: linear-gradient(180deg, rgba(96, 150, 253, 0.27) 0%, rgba(255, 182, 182, 0.42) 100%);
}
</style>