<template>
    <!-- Landing Page Testimonial -->
    <div class="flex flex-wrap justify-center max-w-7xl mt-16 mx-auto px-4 pb-10">
        <div clas="lg:w-1/2">
            <img 
            src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/connected_world_wuay.svg" 
            alt="SVG Logo"
            width="600"
            height="600" >
        </div>

        <div class="text-center pt-10 lg:pl-24 lg:text-left lg:w-1/2">
            <p class="text-4xl lg:text-3xl font-black lg:w-2/3">
                Trusted by thousands of happy employers and employees
            </p>
            <!-- Comment Box -->
            <div class="relative bg-blue-50 lg:w-2/3 h-auto my-8 p-4 rounded-lg">
                <span class="text-lg font-extrabold"> {{ name }} </span>
                <span class="absolute right-4"> {{ rating + " / 10"}} </span> 
                <p class="mt-4"> {{ "\"" + review + "\""}} </p>
            </div>
            <div class="lg:w-2/3 h-auto my-4 flex justify-between lg:justify-end">
                <button class="px-4"><img src="" alt="Left Arrow"></button>
                <button class="px-4"><img src="" alt="Right Arrow"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: "Sierra Coldon",
            rating: "10",
            review: "EmployeEz has provided me a stable job! Definitely will recommend it to my family and friends!"
        };
    }
}
</script>

<style scoped>

</style>