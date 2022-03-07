<template>
    <h1 class="mt-10 mx-0 font-extrabold text-center text-3xl">Find your job in the easy way</h1>
    
    <div class="my-10 lg:w-full grid lg:grid-cols-3 justify-center items-center gap-10 px-10 py-10 text-center">
        <div class="grid-item place-self-center" v-for="item in items">
            <div class="h-3/4 mx-2 my-2 mt-3 px-12 pt-4">
                <img :src="item.img" alt="Logo" width="200" height="200">
            </div>
            <div class="h-1/4">
                <h2 class="mt-4 text-xl font-extrabold"> {{ item.text }} </h2>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [
            {
                img: "https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Sign_in_re_o58h.svg",
                text: "Register an account"
            },
            {
                img: "https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Job_hunt_re_q203.svg",
                text: "Search and apply for a job"
            },
            {
                img: "https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Updated_resume_re_q1or.svg",
                text: "Interview with employers"
            }]
        }
    }
}
</script>

<style scoped>
.grid-item {
    width: 320px;
    height: 300px;
    box-shadow: 0px 4px 10px rgba(3, 27, 136, 0.6);
    border-radius: 30px;
}
</style>