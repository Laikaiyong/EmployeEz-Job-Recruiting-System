<template>
    <div class="py-12">
        <!-- Recruiter dashboard -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" v-if="$page.props.user.current_team_id==2">
            <recruiter></recruiter>
        </div>
        <!-- Job Seeker -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" v-else-if="$page.props.user.current_team_id==3">
            <job-seeker></job-seeker>
        </div>
        <!-- Admin -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" v-else>
            <admin></admin>
        </div>
    </div>
</template>

<script>
import Vue3ChartJs from "@j-t-mcc/vue3-chartjs";
import Recruiter from '@/Components/Dashboard/Recruiter.vue';
import Admin from '@/Components/Dashboard/Admin.vue';
import JobSeeker from '@/Components/Dashboard/JobSeeker.vue';

const pieChart = {
    type: "pie",
    data: {
        labels: ["Recruiter", "Job Seeker", "Admin"],
        datasets:[
        {
            backgroundColor: ["text center", "#E46651", "#00D8FF", "#DD1B16"],
            data: [10, 2, 8, 5],
        },
        ],
    },
};

const doughnutChart = {
    id: 'doughnut',
    type: 'doughnut',
    data: {
    labels: ["Internship", "Part Time", "Full Time", "Contract"],
    datasets: [
        {
        backgroundColor: [
            '#41B883',
            '#E46651',
            '#00D8FF',
            '#DD1B16'
        ],
        data: [10, 2, 8, 5]
        }
    ]
    }
}

const barChart = {
    type: "bar",
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false
            },
            title: {
                display: true,
                font: {
                    size: 24,
                    weight: 'bold'
                },
                text: "Distribution of Job Post among Job Post's Age"
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
        labels: ["Less than 3 Months", "3 - 6 Months", "6 - 12 Months", "More than a year"],
        datasets: [
            {   
                backgroundColor: ["#1abc9c", "#f1c40f", "#2980b9", "#34495e"],
                data: [120, 87, 32, 12],
            },
        ],
    },
};

const radarChart = {
    type: "radar",
    options: {
        min: 0,
        max: 100,
        responsive: true,
        plugins: {
            title: {
                display: true,
                font: {
                    size: 24,
                    weight: 'bold'
                },
                text: 'Average Qualified Candidates per Job Opening'
            },
            legend: {
                display: false,
            },
        },
        scales: {
            y: {
                min: 0,
                max: 100,
                ticks: {
                    callback: function (value) {
                        return `${value}`;
                    },
                },
            },
        },
    },
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
                label: "Skip first dataset",
                data: [
                    24.1231,
                    78.59825103,
                    8.49108368,
                    40.75017147,
                    95.12860082,
                    43.23131001,
                    19.62620027,
                ],
                borderColor: "rgb(255, 99, 132)",
                backgroundColor: "rgba(255, 99, 132, 0.5)",
            },
            // {
            //     label: "Skip mid dataset",
            //     data: [
            //         99.62191358,
            //         43.71227709,
            //         8.68741427,
            //         null,
            //         43.26731824,
            //         41.26714678,
            //         5.83076132,
            //     ],
            //     borderColor: "rgb(54, 162, 235)",
            //     backgroundColor: "rgba(54, 162, 235, 0.5)",
            // },
            // {
            //     label: "Skip last dataset",
            //     data: [
            //         75.2297668,
            //         50.69873114,
            //         74.21296296,
            //         72.9329561,
            //         70.31550069,
            //         63.89146091,
            //         null,
            //     ],
            //     borderColor: "rgb(75, 192, 192)",
            //     backgroundColor: "rgba(75, 192, 192, 0.5)",
            // },
        ],
    },
};

const lineChart = {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
                label: "Views per Job Post",
                data: [20, 23, 22, 18, 34, 40, 36],
                fill: false,
                borderColor: "#41B883",
                backgroundColor: "black",
            },
            {
                label: "Advertisement Post",
                data: [3, 4, 1, 5, 10, 12, 10],
                fill: false,
                borderColor: "#00D8FF",
                tension: 0.5,
                backgroundColor: "blue",
            },
        ],
    },
    options: {
        plugins: {
            title: {
                display: true,
                font: {
                    size: 24,
                    weight: 'bold'
                },
                text: 'Views per Job Post vs Advertisement Posted'
            }
        }
    },
};

export default {
    components: {
        Vue3ChartJs,
        Recruiter,
        Admin,
        JobSeeker
    },
    setup() {
        return {
            doughnutChart,
            pieChart,
            barChart,
            radarChart,
            lineChart
        }
    },
}
</script>

<style scoped>
</style>
