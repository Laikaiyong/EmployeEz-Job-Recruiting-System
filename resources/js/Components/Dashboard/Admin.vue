<template>
    <div class="grid place-content-center bg-white lg:grid-cols-8 sm:rounded-lg">
        <div class="grid place-self-center w-[300px] mx-2 my-2 lg:col-start-2 lg:col-span-1 lg:w-[350px]">
            <h1 class=" my-2 text-center font-semibold text-lg">User Segmentation</h1>
            <vue3-chart-js class="mb-10" v-bind="{ ...pieChart }" />
            <p class="text-center mb-4 text-md"><span class="font-semibold">Total:</span> {{  $page.props.totalSeekers + $page.props.totalAdmin + $page.props.totalCompanies }}</p>
        </div>
        <div class="grid lg:col-start-4 lg:col-span-5 h-full w-[450px] md:w-[590px] mx-2 my-2">
            <h1 class="text-center my-2 font-semibold text-lg">Monthly Job Post</h1>
            <vue3-chart-js class="mb-10" v-bind="{ ...lineChart }" />
            <p class="text-center mb-4 text-md"><span class="font-semibold">Job Post: </span>{{ $page.props.totalJobs }}&#9;<span class="font-semibold">Application: </span>{{ $page.props.totalApply }}</p>
        </div>
    </div>
</template>

<script>
import Vue3ChartJs from "@j-t-mcc/vue3-chartjs";

export default {
    components: {
        Vue3ChartJs
    },
    data() {
        const pieChart = {
                type: "pie",
                data: {
                    labels: ["Job Seeker", "Recruiter", "Admin"],
                    datasets:[
                    {
                        backgroundColor: ["#7879F1", "#A2B0FF", "#4F5FAC"],
                        data: [this.$page.props.totalSeekers, this.$page.props.totalCompanies, this.$page.props.totalAdmin],
                    },
                ],
            },
        };

        const lineChart = {
            type: "line",
            data: {
                labels: [
                    "February",
                    "March",
                    "April",
                ],
                datasets: [
                    {
                        label: "JobPost",
                        data: [this.$page.props.februaryJobs, this.$page.props.marchJobs, this.$page.props.aprilJobs],
                        fill: false,
                        tension: 0.5,
                        borderColor: "#855CF8",
                        backgroundColor: "#855CF8",
                    },
                    {
                        label: "Application",
                        data: [this.$page.props.februaryApply, this.$page.props.marchApply, this.$page.props.aprilApply],
                        fill: false,
                        tension: 0.5,
                        borderColor: "#D9E6FF",
                        backgroundColor: "#D9E6FF",
                    },
                ],
            }
        };
        return {
            pieChart,
            lineChart
        }
    },
}
</script>

<style>

</style>