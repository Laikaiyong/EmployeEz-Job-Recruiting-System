<template>
    <Head title="Applications"></Head>
    <page-header v-if="$page.props.user"></page-header>

    <!-- Applicants cards -->
    <div class="lg:max-w-7xl lg:mx-auto mx-4">
        <div class="grid applicant-container justify-center gap-y-10 mx-4 my-10">
            <!-- Applicant card -->
            <div 
            v-for="(applicant, index) in appliedJobs"
            :key="index"
            class="w-3/4 h-full place-self-center flex flex-col space-y-4 shadow-lg rounded-3xl p-4">
                <div class="w-full px-4 mt-4">
                    <h1 class="text-xl text-left font-bold"> {{ applicant.user_name }} </h1>
                    <p class="text-left text-sm text-gray-500"> {{ applicant.jobpost_title }} </p>
                </div>

                <div class="w-full">
                    <div class="px-4">
                        <img 
                        src="https://www.svgrepo.com/show/156159/location.svg" 
                        alt="Location Logo"
                        width="20"
                        height="20"
                        class="inline">
                        <span class="text-sm text-gray-500 mx-4"> {{ applicant.jobpost_location }} </span>   
                    </div>
                </div>

                <a :href="route('application.profile', {'id': applicant.id})" class="flex justify-center items-center my-4">
                    <button class="text-center text-white text-sm bg-blue-800 rounded-3xl shadow-md hover:bg-opacity-80 hover:shadow-lg active:bg-blue-900 active:shadow-lg px-6 py-2.5 w-3/4">
                        View application
                    </button>
                </a>
                
                <!-- Applied time -->
                <p class="text-left text-xs text-gray-500 px-4"> {{ applicant.created_at }} </p>
            </div>
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
        data() {
            var appliedJobs = [];
            if(this.$page.props.applications)
            {
            for(let applyId = 0; applyId <= (this.$page.props.applications).length - 1; applyId++)
            {
                if(this.$page.props.user.id == this.$page.props.applications[applyId].company_id)
                {
                    appliedJobs.push(this.$page.props.applications[applyId]);
                }
            }
            }
            return {
                selectedTab: 'Applied Job',
                appliedJobs
            }
        }
    })
</script>

<style scoped>
.applicant-container {
    grid-template-columns: repeat(auto-fit, 370px);
}
</style>