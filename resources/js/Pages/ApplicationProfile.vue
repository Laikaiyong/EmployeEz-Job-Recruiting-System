<template>
    <Head title="Jobs"></Head>
    <page-header v-if="$page.props.user"></page-header>

    <div class="lg:max-w-6xl lg:mx-auto mx-8 my-10 flex justify-center lg:justify-start items-center">
        <div class="flex text-base text-gray-500">
            <a :href="route('application.list')">
                <span>&#x276E;</span>
                <span class="mx-4 hover:text-gray-600 hover:underline active:text-gray-700">Back to applicant list</span>
            </a>
        </div>
    </div>

    <!-- Applicant profile section -->
    <div class="lg:max-w-6xl lg:mx-auto mx-8 my-4">
        <div class="xl:max-w-5xl xl:mx-auto my-6">
            <div class="mx-8 flex flex-col lg:flex-row justify-center items-center">
                <div class="lg:basis-1/3 flex flex-col justify-center p-6 mx-2 text-center lg:text-left">
                    <p class="text-gray-900 text-xl font-bold mb-2"> {{ $page.props.selectedApply.user_name }} </p>
                </div>

                <a :href="route('user.profile', {'id': $page.props.selectedApply.user_id, 'name': $page.props.selectedApply.user_name})" class="lg:basis-1/3 flex justify-center">
                    <button type="button" 
                    class="inline-block px-8 py-2.5 lg:py-4 bg-blue-700 text-white font-medium text-base leading-tight rounded-3xl lg:rounded-lg shadow-md hover:bg-blue-800 hover:shadow-lg focus:bg-blue-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-900 active:shadow-lg transition duration-150 ease-in-out">
                    View Profile</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Resume preview section -->
    <div class="w-screen my-10 p-8" id="resume-bg">
        <div class="lg:max-w-6xl lg:mx-auto mx-8">
            <h1 class="text-2xl text-center lg:text-left font-bold">Resume</h1>
            <div class="flex justify-center items-center mt-4">
                <iframe :src="$page.props.selectedApply.resume" allowfullscreen width="520" height="700"></iframe>
            </div>
        </div>
    </div>

    <!-- Additional Comments Section -->
    <div class="lg:max-w-6xl lg:mx-auto py-6 mx-8 my-6">
        <h1 class="block text-center lg:text-left text-xl lg:text-2xl font-bold">Additional Comments</h1>
        <div class="mt-4">
            <p class="text-sm lg:text-base text-gray-500 text-center lg:text-left"> {{ $page.props.selectedApply.additional_comments }} </p>
        </div>
    </div>
    <page-footer></page-footer>
</template>

<script>
    import { defineComponent } from 'vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            PageHeader,
            PageFooter,
            Head
        },
    })
</script>

<style scoped>
#resume-bg {
    background: rgba(96, 150, 253, 0.12);
}
</style>