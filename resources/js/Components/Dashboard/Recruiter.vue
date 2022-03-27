<template>
    <div class="grid place-content-center bg-white lg:grid-cols-8 sm:rounded-lg">
        <div class="grid place-self-center w-[300px] mx-2 my-2 lg:col-start-2 lg:col-span-1 lg:w-[350px]">
            <h1 class=" my-2 text-center font-semibold text-lg">Company Summary</h1>
            <p class="text-center mb-4 text-md"><span class="font-semibold">Total Application: </span>{{ totalApplication }}</p>
            <p class="text-center mb-4 text-md"><span class="font-semibold">Total Job Post: </span>{{ totalJobPost }}</p>
        </div>
        <div class="grid lg:col-start-4 lg:col-span-5 h-full w-[450px] md:w-[590px] mx-2 my-2">
            <h1 class="text-center my-2 font-semibold text-lg">All Applications per Category</h1>
            <vue3-chart-js class="mb-10" v-bind="{ ...barChart }" />
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
        var totalApplication = 0;
        var totalJobPost = 0;
        for(let jobNumber = 0; jobNumber <= (this.$page.props.jobs).length - 1; jobNumber++)
        {
            if(this.$page.props.jobs[jobNumber].user_id == this.$page.props.user.id)
            {
                totalJobPost++;
            }
        }

        for(let applyNumber = 0; applyNumber <= (this.$page.props.applications).length - 1; applyNumber++)
        {
            if(this.$page.props.applications[applyNumber].company_id == this.$page.props.user.id)
            {
                totalApplication++;
            }
        }

        const barChart = {
            type: "bar",
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function (value) {
                                return `${value}`; // y-ticks
                            },
                        },
                    },
                },
            },
            data: {
                labels: ["Internship", "Contract", "Part-time", "Full-time"],
                datasets: [
                    {   
                        backgroundColor: ["#7879F1", "#A2B0FF", "#4F5FAC", "#855CF8"],
                        data: [this.$page.props.internshipApply, this.$page.props.contractApply, this.$page.props.partTimeApply, this.$page.props.fullTimeApply],
                    },
                ],
            },
        };
        return {
            totalApplication,
            totalJobPost,
            barChart
        }
    },
}
</script>

<style>

</style>