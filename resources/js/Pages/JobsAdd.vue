<template>
    <Head title="Jobs"></Head>
    <page-header v-if="$page.props.user"></page-header>

    <div class="lg:max-w-7xl lg:mx-auto">
        <h1 class="text-3xl font-bold text-center lg:text-left pb-4 mt-4">Add new job</h1>
        <form action="">
            <div class="flex flex-col lg:flex-row justify-center mt-4 mb-8">
                <!-- Left side -->
                <div class="flex justify-center lg:basis-1/2">
                    <div class="flex flex-col justify-center items-center bg-white lg:rounded-lg lg:shadow-lg w-full lg:w-5/6 py-8">
                        <!-- Cover photo -->
                        <div class="flex flex-col justify-center items-center mt-4">
                            <h2 class="text-xl text-center font-bold">Cover photo</h2>
                            <div class="rounded-lg shadow-lg bg-white max-w-1/2 my-4">
                                <img src="" 
                                alt="profile picture"
                                class="my-4"
                                width=200
                                height=200>
                            </div>
                            <button type="button" 
                            class="inline-block px-6 py-2.5 mb-4 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Change</button>
                        </div>

                        <!-- Left side form -->
                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <label for="job_title" class="inline-block mb-2 text-gray-700 font-bold">Job Title</label>
                                <input
                                type="text"
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="job_title"
                                v-model="form.title"
                                placeholder="Enter job title" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <label for="job_location" class="inline-block mb-2 text-gray-700 font-bold">Job Location</label>
                                <input
                                type="text"
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="job_location"
                                v-model="form.location"
                                placeholder="Enter job location" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <label for="job_type" class="inline-block mb-2 text-gray-700 font-bold">Job Type</label>
                                <select 
                                class="appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                                aria-label="Default select example"
                                v-model="form.job_type">
                                    <option selected>Select job type</option>
                                    <option v-for="option in job_types" :value="option"> {{ option }} </option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <label 
                                for="job_industry" class="inline-block mb-2 text-gray-700 font-bold">Job Industry</label>
                                <select 
                                class="appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                                aria-label="Default select example"
                                v-model="form.job_industry">
                                    <option selected>Select job industry</option>
                                    <option v-for="option in industries" :value="option"> {{ option }} </option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Right side -->
                <div class="flex justify-center lg:basis-1/2">
                    <div class="flex flex-col justify-center items w-5/6 py-8"> 
                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <label for="job_description" class="inline-block mb-2 text-gray-700 font-bold">Job Description</label>
                                <textarea
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none resize-none"
                                id="job_description"
                                rows="5"
                                v-model="form.description"
                                placeholder="Enter job description"></textarea>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <label for="job_requirement" class="inline-block mb-2 text-gray-700 font-bold">Job Requirement</label>
                                <textarea
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none resize-none"
                                id="job_requirement"
                                rows="5"
                                v-model="form.requirement"
                                placeholder="Enter job requirement"></textarea>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <label for="beneficial_skills" class="inline-block mb-2 text-gray-700 font-bold">Beneficial Skills</label>
                                <textarea
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none resize-none"
                                id="beneficial_skills"
                                rows="5"
                                v-model="form.beneficial_skills"
                                placeholder="Enter beneficial skills"></textarea>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <label for="job_salary" class="inline-block mb-2 text-gray-700 font-bold font-bold">Salary</label>
                                <input
                                type="text"
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="job_salary"
                                v-model="form.allowance"
                                placeholder="Enter salary amount" />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="mb-3 w-72 xl:w-96">
                                <label for="application_closing_date" class="inline-block mb-2 text-gray-700 font-bold">Application Closing Date</label>
                                <input
                                type="date"
                                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="application_closing_date"
                                v-model="form.application_closing_date"
                                placeholder="Enter application closing date" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="flex justify-center py-4 mt-4 mb-8">
                <button 
                type="button" 
                class="inline-block px-12 py-2.5 mr-6 bg-red-600 text-white font-medium text-base leading-tight uppercase rounded-lg shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Cancel
                </button>
                
                <button 
                type="submit" 
                class="inline-block px-12 py-2.5 ml-6 bg-blue-600 text-white font-medium text-base leading-tight uppercase rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Submit
                </button>
            </div>
        </form>
    </div>

    <page-footer></page-footer>
</template>
// I am HonKit Impact,
// Please refer the JobPosts.vue for form action
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
                job_types: [
                    'Internship',
                    'Full Time',
                    'Part Time',
                    'Contract'
                ],
                industries: [
                    'Technology', 
                    'Finance', 
                    'Multimedia'
                ],
                form: {
                    title: null,
                    location: null,
                    job_type: null,
                    job_industry: null,
                    description: null,
                    requirement: null,
                    beneficial_skills: null,
                    allowance: null,
                    application_closing_date: null,
                }
            }
        }
    })
</script>

<style scoped>

</style>