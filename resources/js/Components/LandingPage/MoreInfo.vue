<template>
    <h1 class="mt-10 mx-0 font-extrabold text-center text-3xl">Find your job in the easy way</h1>
    
    <div class="my-10 w-full grid xl:grid-cols-3 gap-10 px-10 py-10 text-center">
        <div class="grid-item justify-center place-self-center" v-for="item in items">
             <img :src="item.img" alt="Logo" width="160" height="200">
             <h2 class="mt-4 text-xl font-extrabold"> {{ item.text }} </h2>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [
            {
                img: "",
                text: "Register an account"
            },
            {
                img: "",
                text: "Search and apply for a job"
            },
            {
                img: "",
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