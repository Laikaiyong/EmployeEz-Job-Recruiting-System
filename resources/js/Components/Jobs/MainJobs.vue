<template>
<div>
    <div class="text-right text-gray-600 mr-20 xl:mr-30">
        <input class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none mt-10"
            type="search" v-model="keyword" name="search" placeholder="Search for Job">
        <button @click="runQuery()" type="submit" class="ml-6 mt-10 inline-block">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
            </svg>
        </button>
    </div>
    <div>
        <div class="max-w-2xl mx-auto py-8 px-4 lg:max-w-7xl lg:px-8">
            <div class="px-10 py-10 grid gap-10 md:grid-cols-2 lg:grid-cols-3">
                <div 
                v-for="job in $page.props.jobs.data" 
                :key="job.id" 
                class="max-w-xs w-64 rounded-lg overflow-hidden shadow-lg hover:scale-105 transition duration-500 cursor-pointer place-self-center mb-10">
                    <div
                    class="mx-2 my-2 mt-3">
                        <img 
                        v-if="job.cover_image_url != null"
                        :src="job.cover_image_url" 
                        style="max-height: 125px; height: 125px;"
                        class="w-full h-2/5 my-auto object-cover rounded-t-3xl">
                        <img 
                        v-else 
                        src="/img/EmployeEz banner.png"
                        class="w-full h-2/5 my-auto object-cover rounded-t-3xl"
                        style="max-height: 125px;">
                    </div>
                    <div class="w-full basis-2/5 my-auto">
                        <div class="mx-4 mb-4 px-4 my-4">
                            <h2 class="font-bold"> {{ job.title }} </h2>
                            <p class="text-gray-500"> {{ job.company }} </p>
                        </div>

                        <div class="text-sm text-gray-500 mx-4 px-4">
                            <div>
                                <img 
                                src="https://www.svgrepo.com/show/156159/location.svg" 
                                alt="Location Logo"
                                width="20"
                                height="20"
                                class="inline">
                                <span class="mx-4"> {{ job.location }} </span>   
                            </div>
                            <div class="mt-4">
                                <img 
                                src="https://www.svgrepo.com/show/16795/briefcase.svg" 
                                alt="Sector Logo"
                                width="20"
                                height="20"
                                class="inline">
                                <span class="mx-4"> {{ job.industry }} </span>
                            </div>
                            <div class="mt-4">
                                <img 
                                src="https://www.svgrepo.com/show/21938/time.svg" 
                                alt="Job Type Logo"
                                width="20"
                                height="20"
                                class="inline">
                                <span class="mx-4"> {{ job.type }} </span>
                            </div>
                        </div>
                    </div>

                    <!-- Apply Button -->
                    <div class="py-6 w-full basis-1/5 flex text-center justify-center my-auto" >
                        <a class="w-1/2 h-fit bg-blue-900 hover:opacity-80 text-sm text-white rounded-xl shadow-lg p-2" :href="route('jobs.profile', { id: job.id })" >
                            <button>View Details</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto mb-10" v-if="($page.props.jobs.links).length > 3">
        <div class="justify-center flex flex-wrap -mb-1">
            <template v-for="(link, page) in $page.props.jobs.links" :key="page">
                <div v-if="link.url === null" class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded"
                    v-html="link.label" />
                <Link v-else
                    class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded focus:border-indigo-800 focus:text-indigo-800"
                    :class="{ 'bg-indigo-800 text-white': link.active }" :href="link.url + '&keyword=' + keyword" v-html="link.label" />
            </template>
        </div>
    </div>
</div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';
    export default {
        components: {
            Link
        },
        data() {
            return {
                keyword: ""
            }
        },
        methods: {
            runQuery() {
                this.$inertia.replace(this.route('jobs', {keyword: this.keyword}))
            }
        }
    }
</script>

<style scoped>
.card-img {
    /* max-height: 150px; */
    border-radius: 30px;
}
</style>
