<template>
    <div v-if="$page.props.selectedUser[0].current_team_id == 2">
        <div class="h-36 lg:h-52 block bg-cover" style="background-color: #90d5ec; background-image: linear-gradient(315deg, #90d5ec 0%, #fc575e 74%);"></div>
		<div class="lg:ml-20 xl:ml-40 p-4 text-center lg:text-left">
            
			<!-- Image for mobile view-->
			<div class="block rounded-full shadow-xl mx-auto -mt-28 h-48 w-48 bg-cover bg-center lg:bg-left lg:mx-0 lg:mb-10 xl:ml-6" :style="{'background-image': 'url('+$page.props.selectedUser[0].profile_photo_url+')'}"></div>
			
			<h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ $page.props.selectedUser[0].name }}</h1>
			<!-- <p class="pt-4 text-gray-500 font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg>Administrator</p> -->
			<a :href="route('profile.show')" class="pt-12 pb-8">
				<button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
				  Edit details
				</button> 
			</a>
	    </div>
    </div>
    <div v-else-if="$page.props.selectedUser[0].current_team_id == 3">
        Job Seeker
    </div>

    <!-- Admin -->
    <div v-else class="w-full rounded-lg lg:rounded-l-lg lg:rounded-r-none bg-white opacity-75 text-center mx-auto lg:mx-0">
	
        <div class="h-36 lg:h-52 block bg-cover" style="background-color: #f9c5d1; background-image: linear-gradient(315deg, #f9c5d1 0%, #9795ef 74%);"></div>
		<div class="lg:ml-20 xl:ml-40 p-4 text-center lg:text-left">
            
			<!-- Image for mobile view-->
			<div class="block rounded-full shadow-xl mx-auto -mt-28 h-48 w-48 bg-cover bg-center lg:bg-left lg:mx-0 lg:mb-16" :style="{'background-image': 'url('+$page.props.selectedUser[0].profile_photo_url+')'}"></div>
			
			<h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ $page.props.selectedUser[0].name }}</h1>
			<p class="pt-4 text-gray-500 font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg>Administrator</p>
			<a :href="route('profile.show')" class="pt-12 pb-8">
				<button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
				  Edit details
				</button> 
			</a>
	    </div>
    </div>
</template>

<script>
export default {
}
</script>

<style>

</style>