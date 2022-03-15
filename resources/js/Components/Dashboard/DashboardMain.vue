<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="inline-block" style="max-width: 300px">
                    <vue3-chart-js v-bind="{ ...pieChart }" />
                </div>
                <div class="inline-block" style="max-width: 300px">
                    <vue3-chart-js v-bind="{ ...doughnutChart }" />
                </div>
                <div class="inline-block" style="width: 600px">
                    <vue3-chart-js v-bind="{ ...barChart }" />
                </div>
                <div class="inline-block" style="width: 600px">
                    <vue3-chart-js v-bind="{ ...radarChart }" />
                </div>
                <div class="inline-block" style="width: 600px">
                    <vue3-chart-js v-bind="{ ...lineChart }" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Vue3ChartJs from "@j-t-mcc/vue3-chartjs";
const pieChart = {
    type: "pie",
    data: {
        labels: ["VueJs", "EmberJs", "ReactJs", "AngularJs"],
        datasets:[
        {
            backgroundColor: ["#41B883", "#E46651", "#00D8FF", "#DD1B16"],
            data: [40, 20, 80, 10],
        },
        ],
    },
};

const doughnutChart = {
    id: 'doughnut',
    type: 'doughnut',
    data: {
    labels: ['VueJs', 'EmberJs', 'ReactJs', 'AngularJs'],
    datasets: [
        {
        backgroundColor: [
            '#41B883',
            '#E46651',
            '#00D8FF',
            '#DD1B16'
        ],
        data: [40, 20, 80, 10]
        }
    ]
    }
}

const barChart = {
    type: "bar",
    options: {
    min: 0,
    max: 100,
    responsive: true,
    plugins: {
        legend: {
        position: "top",
        },
    },
    scales: {
        y: {
        min: -100,
        max: 100,
        ticks: {
            callback: function (value) {
            return `${value}%`;
            },
        },
        },
    },
    },
    data: {
    labels: ["VueJs", "EmberJs", "ReactJs", "AngularJs"],
    datasets: [
        {
        label: "My First Dataset",
        backgroundColor: ["#1abc9c", "#f1c40f", "#2980b9", "#34495e"],
        data: [40, 20, 50, 10],
        },
        {
        label: "My Second Dataset",
        backgroundColor: ["#2ecc71", "#e67e22", "#9b59b6", "#bdc3c7"],
        data: [-40, -20, -10, -10],
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
        legend: {
        position: "top",
        },
    },
    scales: {
        y: {
        min: -100,
        max: 100,
        ticks: {
            callback: function (value) {
            return `${value}%`;
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
            null,
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
        {
        label: "Skip mid dataset",
        data: [
            99.62191358,
            43.71227709,
            8.68741427,
            null,
            43.26731824,
            41.26714678,
            5.83076132,
        ],
        borderColor: "rgb(54, 162, 235)",
        backgroundColor: "rgba(54, 162, 235, 0.5)",
        },
        {
        label: "Skip last dataset",
        data: [
            75.2297668,
            50.69873114,
            74.21296296,
            72.9329561,
            70.31550069,
            63.89146091,
            null,
        ],
        borderColor: "rgb(75, 192, 192)",
        backgroundColor: "rgba(75, 192, 192, 0.5)",
        },
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
        label: "Caffine Consumption",
        data: [65, 59, 80, 81, 56, 55, 40],
        fill: false,
        borderColor: "#41B883",
        backgroundColor: "black",
        },
        {
        label: "Productivity",
        data: [70, 25, 110, 90, 5, 60, 30],
        fill: false,
        borderColor: "#00D8FF",
        tension: 0.5,
        backgroundColor: "blue",
        },
    ],
    },
    options: {
    },
};

export default {
    components: {
        Vue3ChartJs
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
