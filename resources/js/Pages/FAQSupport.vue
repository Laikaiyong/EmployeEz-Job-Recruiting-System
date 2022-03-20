<template>
    <Head title="FAQs"></Head>
    <page-header v-if="$page.props.user"></page-header>
    <unauth-header v-else canLogin=canLogin canRegister=canRegister></unauth-header>

    <div class="lg:max-w-6xl lg:mx-auto mx-4">
        <!-- Title and search bar -->
        <div class="mx-4 lg:max-w-6xl lg:mx-auto mx-4 mt-10">
            <h1 class="text-3xl text-center font-bold">Frequently Asked Questions (FAQ)</h1>
            <div class="flex justify-center items-center mt-10">
                <input 
                class="border-2 border-gray-300 bg-white px-5 rounded-lg text-sm focus:outline-none lg:w-96" 
                type="search" 
                v-model="keyword" 
                name="search" 
                placeholder="Search in Frequently Asked Questions">

                <!-- referred from MainJobs.vue (job search icon)-->
                <button type="button" class="ml-6 inline-block">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Job application questions -->
        <div class="lg:max-w-6xl lg:mx-auto mx-4 mt-10">
            <h1 class="text-3xl text-center font-bold">About job application</h1>
            <div class="flex flex-col justify-center items-center space-y-6 justify-start py-4 mt-4 lg:max-w-3xl lg:mx-auto">
                <div class="w-full" v-for="(job_faq, index) in job_faqs" :key="index">
                    <details class="inline-block py-6 px-6 w-full bg-white font-medium text-xl text-left leading-tight rounded-lg shadow-lg hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-0 active:shadow-xl transition duration-150 ease-in-out">
                        <summary>
                            {{ job_faq.question }}
                        </summary>
                        <div class="text-base px-4 pt-4">
                            <p class="mb-4">
                                {{ job_faq.answer }}
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>

        <!-- Account questions -->
        <div class="lg:max-w-6xl lg:mx-auto mx-4 my-10">
            <h1 class="text-3xl text-center font-bold">About my account</h1>
            <div class="flex flex-col justify-center items-center space-y-6 justify-start py-4 mt-4 lg:max-w-3xl lg:mx-auto">
                <div class="w-full" v-for="(account_faq, index) in account_faqs" :key="index + 3">
                    <details class="inline-block py-6 px-6 w-full bg-white font-medium text-xl text-left leading-tight rounded-lg shadow-lg hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-0 active:shadow-xl transition duration-150 ease-in-out">
                        <summary>
                            {{ account_faq.question }}
                        </summary>
                        <div class="text-base px-4 pt-4">
                            <p class="mb-4">
                                {{ account_faq.answer }}
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
    
    <page-footer></page-footer>
</template>

<script>
    import { defineComponent } from 'vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import UnauthHeader from '@/Components/UnauthHeader.vue';
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
        },
        data() {
            return {
                keyword: null,
                job_faqs: [
                    {
                        question: "How to apply for jobs?",
                        answer: "You can start applying by completing your profile and uploading your latest resume. Make sure that the details are relevant to you so that recruiters are interested! Head to the jobs page and start applying."
                    },
                    {
                        question: "What is the status of my job application?",
                        answer: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente assumenda, quibusdam corrupti quasi temporibus voluptates culpa quaerat tempora natus, ipsa vero aperiam optio praesentium voluptatibus, officiis accusantium fugit nostrum consectetur!"
                    },
                    {
                        question: "What sort of jobs does EmployeEz provide?",
                        answer: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente assumenda, quibusdam corrupti quasi temporibus voluptates culpa quaerat tempora natus, ipsa vero aperiam optio praesentium voluptatibus, officiis accusantium fugit nostrum consectetur!"
                    },
                ],
                account_faqs: [
                    {
                        question: "How do I change my password?",
                        answer: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente assumenda, quibusdam corrupti quasi temporibus voluptates culpa quaerat tempora natus, ipsa vero aperiam optio praesentium voluptatibus, officiis accusantium fugit nostrum consectetur!"
                    },
                    {
                        question: "How can I delete my account?",
                        answer: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente assumenda, quibusdam corrupti quasi temporibus voluptates culpa quaerat tempora natus, ipsa vero aperiam optio praesentium voluptatibus, officiis accusantium fugit nostrum consectetur!"
                    }
                ]
            }
        },
    })
</script>

<style scoped>
summary {
    list-style: none;
    cursor: pointer;
}
summary::-webkit-details-marker {display: none;}

details summary::after {
    content: '+';
    float: right;
}

details[open] summary::after {
    content: '-';
    float: right;
}
</style>