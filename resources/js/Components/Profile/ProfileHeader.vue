<template>
	<!-- Recruiter -->
    <div v-if="$page.props.selectedUser[0].current_team_id == 2" class="w-full rounded-lg lg:rounded-l-lg lg:rounded-r-none mx-auto lg:mx-0">
			
        <div class="h-36 lg:h-52 block bg-cover" style="background-color: #90d5ec; background-image: linear-gradient(315deg, #90d5ec 0%, #fc575e 74%);">
			<font-awesome-icon v-if="$page.props.selectedUser[0].verified == true" :icon="verifiedIcon" />
		</div>
		<div class="lg:ml-20 xl:ml-40 p-4 mb-14 text-center lg:text-left">
            
			<!-- Image for mobile view-->
			<div class="block rounded-full shadow-xl mx-auto -mt-28 h-48 w-48 bg-cover bg-center lg:bg-left lg:mx-0 lg:mb-16" :style="{'background-image': 'url('+$page.props.selectedUser[0].profile_photo_url+')'}"></div>

			<template v-if="$page.props.user != null">
			<a v-if="$page.props.selectedUser[0].id == $page.props.user.id" :href="route('profile.show')" class="float-right -mt-32 lg:mr-96 lg:-mt-48 pt-12 pb-8">
				<button class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md">
				Edit details
				</button> 
			</a>
			<template v-else></template>
			</template>
			
			<h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ $page.props.selectedUser[0].name }}</h1>
			<p class="pt-4 text-gray-500 font-bold flex items-center justify-center lg:justify-start">{{ $page.props.selectedUser[0].title }}</p>
	    </div>
    </div>

	<!-- Job Seeker -->
    <div v-else-if="$page.props.selectedUser[0].current_team_id == 3" class="w-full rounded-lg lg:rounded-l-lg lg:rounded-r-none mx-auto lg:mx-0">
	
        <div class="h-36 lg:h-52 block bg-cover" style="background-color: #f7b42c; background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);"></div>
		<div class="lg:ml-20 xl:ml-40 p-4 mb-14 text-center lg:text-left">
            
			<!-- Image for mobile view-->
			<div class="block rounded-full shadow-xl mx-auto -mt-28 h-48 w-48 bg-cover bg-center lg:bg-left lg:mx-0 lg:mb-16" :style="{'background-image': 'url('+$page.props.selectedUser[0].profile_photo_url+')'}"></div>

			<template v-if="$page.props.user != null">
			<a v-if="$page.props.selectedUser[0].id == $page.props.user.id" :href="route('profile.show')" class="float-right -mt-32 lg:mr-96 lg:-mt-48 pt-12 pb-8">
				<button class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md">
				Edit details
				</button> 
			</a>
			<template v-else></template>
			</template>
			
			<h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ $page.props.selectedUser[0].name }}</h1>
			<p class="pt-4 text-gray-500 font-bold flex items-center justify-center lg:justify-start">{{ $page.props.selectedUser[0].title }}</p>
	    </div>
    </div>

    <!-- Admin -->
    <div v-else class="w-full rounded-lg lg:rounded-l-lg lg:rounded-r-none mx-auto lg:mx-0">
	
        <div class="h-36 lg:h-52 block bg-cover" style="background-color: #f9c5d1; background-image: linear-gradient(315deg, #f9c5d1 0%, #9795ef 74%);"></div>
		<div class="lg:ml-20 xl:ml-40 p-4 mb-14 text-center lg:text-left">
            
			<!-- Image for mobile view-->
			<div class="block rounded-full shadow-xl mx-auto -mt-28 h-48 w-48 bg-cover bg-center lg:bg-left lg:mx-0 lg:mb-16" :style="{'background-image': 'url('+$page.props.selectedUser[0].profile_photo_url+')'}"></div>

			<template v-if="$page.props.user != null">
			<a v-if="$page.props.selectedUser[0].id == $page.props.user.id" :href="route('profile.show')" class="float-right -mt-32 lg:mr-96 lg:-mt-48 pt-12 pb-8">
				<button class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md">
				Edit details
				</button> 
			</a>
			<template v-else></template>
			</template>
			
			<h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ $page.props.selectedUser[0].name }}</h1>
			<p class="pt-4 text-gray-500 font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg>Administrator</p>
	    </div>
    </div>
</template>

<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { 
    faCheckCircle
} from '@fortawesome/free-solid-svg-icons';
export default {
    data() {
        return {
            verifiedIcon: faCheckCircle
        }
    },
    components: {
        FontAwesomeIcon
    }
}
</script>

<style>

</style>