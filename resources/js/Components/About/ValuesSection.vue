<template>
    <div id="section-bg" class="text-center">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-20 sm:px-6 lg:max-w-7xl lg:px-8">
            <h3 class="text-2xl font-bold mt-1">Our Values</h3>

            <div class="px-10 py-10 grid gap-10 xl:grid-cols-3">
                <div 
                v-for="card in cards" 
                :key="card.id" 
                class="card-bg max-w-xs rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500 cursor-pointer place-self-center">
                    <div>
                        <img class="card-img" :src="card.imageSrc" :alt="card.imageAlt"/>
                    </div>
                    <div class="py-4 px-4 mx-2">
                        <h3 class="text-lg font-semibold">{{ card.name }}</h3>
                        <p class="mt-4 text-md font-thin h-24">{{ card.desc }}</p>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</template>

<script>
const cards = [
  {
    id: 1,
    name: 'We help people',
    imageSrc: 'https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Helpful_sign_re_8ms5.svg',
    imageAlt: "Helpful Sign Vector.",
    desc: "We believe that helping people is the way of creating a better society."
  },
  {
    id: 2,
    name: 'We love what we do',
    imageSrc: 'https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Connection_re_lcud.svg',
    imageAlt: "A Whole Year Vector.",
    desc: "Our cause is a great adventure. We're passionate people making a change."
  },
  {
    id: 3,
    name: 'We like collaboration',
    imageSrc: 'https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Team_collaboration_re_ow29.svg',
    imageAlt: "Helpful Sign Vector.",
    desc: "We treat everyone with respect and integrity while collaboration."
  }
]
export default {
  setup() {
    return {
      cards,
    }
  }
}
</script>

<style scoped>
#section-bg {
    background: rgba(96, 150, 253, 0.12);
}

.card-bg {
    background: #F9B7BB;
}

.card-img {
    max-height: 169px;
}
</style>