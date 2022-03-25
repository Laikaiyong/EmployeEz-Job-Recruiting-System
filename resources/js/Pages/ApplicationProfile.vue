<template>
    <Head title="Jobs"></Head>
    <page-header v-if="$page.props.user"></page-header>

    <div class="lg:max-w-6xl lg:mx-auto mx-8 my-10 flex justify-center lg:justify-start items-center">
        <div class="flex text-base text-gray-500">
            <a href="#">
                <span>&#x276E;</span>
                <span class="mx-4 hover:text-gray-600 hover:underline active:text-gray-700">Back to applicant list</span>
            </a>
        </div>
    </div>

    <!-- Applicant profile section -->
    <div class="lg:max-w-6xl lg:mx-auto mx-8 my-4">
        <div class="xl:max-w-5xl xl:mx-auto my-6">
            <div class="mx-8 flex flex-col lg:flex-row justify-center items-center">
                <img
                :src="applicant.profile_photo_url"
                class="rounded-lg w-48 object-cover"
                style="min-height: 150px; max-height:200px"
                alt="Avatar"/>

                <div class="lg:basis-1/3 flex flex-col justify-center p-6 mx-2 text-center lg:text-left">
                    <p class="text-gray-900 text-xl font-bold mb-2"> {{ applicant.name }} </p>
                    <p class="text-gray-700 text-base"> {{ applicant.title }} </p>
                    <p class="text-gray-700 text-base"> {{ applicant.email }} </p>
                </div>

                <a class="lg:basis-1/3 flex justify-center">
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
                <!-- insert the file url here at src (can directly insert the link saved at database) -->
                <iframe src="" width="520" height="700"></iframe>
            </div>
        </div>
    </div>

    <!-- Additional Comments Section -->
    <div class="lg:max-w-6xl lg:mx-auto py-6 mx-8 my-6">
        <h1 class="block text-center lg:text-left text-xl lg:text-2xl font-bold">Additional Comments</h1>
        <div class="mt-4">
            <p class="text-sm lg:text-base text-gray-500 text-center lg:text-left"> {{ applicant.comment }} </p>
        </div>
    </div>

    <!-- Button group -->
    <div class="lg:max-w-2xl lg:mx-auto mx-8 my-6 flex justify-center items-center space-x-4 lg:space-x-16">
        <button type="button" class="inline-block px-6 py-2.5 lg:px-8 lg:py-4 bg-rose-600 text-white font-medium text-sm lg:text-base leading-tight rounded-3xl shadow-md hover:bg-rose-700 hover:shadow-lg focus:bg-rose-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-800 active:shadow-lg transition duration-150 ease-in-out">
            Decline applicant
        </button>

        <button type="button" class="inline-block px-6 py-2.5 lg:px-8 lg:py-4 bg-blue-800 text-white font-medium text-sm lg:text-base leading-tight rounded-3xl shadow-md hover:opacity-80 hover:shadow-lg focus:bg-blue-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-900 active:shadow-lg transition duration-150 ease-in-out">
            Shortlist applicant
        </button>
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
        props: {
            canLogin: Boolean,
            canRegister: Boolean
        },
        data() {
            return {
                applicant: {
                    applicant_id: 1,
                    profile_photo_url: 'https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                    name: 'Louisa Allen',
                    title: 'Software Engineering Student',
                    email: 'louisaallen@gmail.com',
                    comment: 'I am an individual dedicated to learning new knowledge by challenging myself to greater heights everyday. I am technically skilled in several IT expertises such as Python, HTML and CSS. I think I will be a good fit for this job as I possess valuable knowledge through my personal and voluntary development projects. Last but not least, effective communication is one of my strong suits when it comes to collaborating with others.'
                }
            }
        }
    })
</script>

<style scoped>
#resume-bg {
    background: rgba(96, 150, 253, 0.12);
}
</style>