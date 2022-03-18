<template>
    <div class="max-w-7xl mx-10 pb-20 sm:px-6 lg:px-8 lg:mx-0">
        <div class="lg:ml-10 xl:ml-32 py-10 bg-slate-50 rounded-xl overflow-hidden shadow-lg">
            <h1 class="ml-6 text-xl font-bold pt-2 lg:pt-0 flex items-center justify-center lg:justify-start">Contact Details</h1>
            <a :href="'mailto:'+$page.props.selectedUser[0].email"  class="ml-6 lg:ml-10 mt-8 border-indigo-400 border-l-8 py-4 rounded-l-sm text-lg pt-2 flex items-center justify-start hover:scale-105 transition duration-500 cursor-pointer" >
                <font-awesome-icon class=" text-xl align-middle ml-8" :icon="envelopeIcon" />
                <p class="text-md align-middle ml-6">{{ $page.props.selectedUser[0].email }}</p>
            </a>
            <a :href="'tel:'+$page.props.selectedUser[0].contact_number" class="ml-6 lg:ml-10 mt-8 border-indigo-800 border-l-8 py-4 rounded-l-sm text-lg pt-2 flex items-center justify-start hover:scale-105 transition duration-500 cursor-pointer" >
                <font-awesome-icon class=" text-xl align-middle ml-8" :icon="phoneIcon" />
                <p class="text-md align-middle ml-6">{{ ($page.props.selectedUser[0].contact_number) ? $page.props.selectedUser[0].contact_number : "None"  }}</p>
            </a>
            <a target="_blank" :href="$page.props.selectedUser[0].url"  class="ml-6 lg:ml-10 mt-8 border-pink-300 border-l-8 py-4 rounded-l-sm text-lg pt-2 flex items-center justify-start hover:scale-105 transition duration-500 cursor-pointer" >
                <font-awesome-icon class=" text-xl align-middle ml-8" :icon="desktopIcon" />
                <p class="text-md align-middle ml-6">{{ ($page.props.selectedUser[0].url) ? $page.props.selectedUser[0].url : "None" }}</p>
            </a>
        </div>
    </div> 
</template>

<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { 
    faEnvelope,
    faPhone,
    faDesktop
} from '@fortawesome/free-solid-svg-icons';
export default {
    data() {
        return {
            envelopeIcon: faEnvelope,
            phoneIcon: faPhone,
            desktopIcon: faDesktop
        }
    },
    components: {
        FontAwesomeIcon
    }
}
</script>

<style>

</style>