<template>
   <div class="text-center">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-20 sm:px-6 lg:max-w-7xl lg:px-8">
            <h3 class="text-2xl font-bold mt-1">Meet the Team</h3>

            <div class="px-10 py-10 grid gap-10 md:grid-cols-2 xl:grid-cols-4">
                <div 
                v-for="member in members" 
                :key="member.id" 
                class="max-w-xs w-64 rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500 cursor-pointer place-self-center">
                    <div
                    class="mx-2 my-2 mt-3 justify-center">
                        <img class="card-img object-cover h-32 w-32 mx-auto" :src="member.imageSrc" :alt="member.imageAlt"/>
                    </div>
                    <div class="py-4 px-4 mx-2">
                        <h3 class="text-lg font-semibold">{{ member.name }}</h3>
                        <p class="mt-1 text-md font-thin">{{ member.desc }}</p>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</template>

<script>
const members = [
    {
        id: 1,
        name: 'Cheong Sheng Kui',
        imageSrc: '/img/Cheong.jpg',
        imageAlt: "Cheong Sheng Kui",
        desc: "Project Manager"
    },
    {
        id: 2,
        name: 'Lim Wye Yee',
        imageSrc: '/img/Cheryl.jpg',
        imageAlt: "Lim Wye Yee",
        desc: "System Analyst"
    },
    {
        id: 3,
        name: 'Kok Hon Kit',
        imageSrc: '/img/HonKit.jpeg',
        imageAlt: "Kok Hon Kit",
        desc: "Developer"
    },
    {
        id: 4,
        name: 'Vandyck',
        imageSrc: 'https://avatars.githubusercontent.com/u/76078213?v=4',
        imageAlt: "Vandyck Lai Kai Yong",
        desc: "Full Stack Milo Truck Uncle"
    },
]
export default {
    setup() {
    return {
      members,
    }
  },
  props: ['teamId']
}
</script>

<style scoped>
.card-img {
    /* max-height: 150px; */
    border-radius: 30px;
}
</style>