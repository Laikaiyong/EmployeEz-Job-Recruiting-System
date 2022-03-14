<template>
<div>
    <div class="text-right text-gray-600 mr-20 xl:mr-30">
        <input class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none mt-10"
            type="search" name="search" placeholder="Search for Job">
        <button type="submit" class="ml-6 mt-10 inline-block">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
            </svg>
        </button>
    </div>
    <div>
        <div class="max-w-2xl mx-auto py-8 px-4 lg:max-w-7xl lg:px-8">
            <div class="px-10 py-10 grid gap-10 md:grid-cols-2 lg:grid-cols-3">
                <div 
                v-for="job in jobs" 
                :key="job.id" 
                class="max-w-xs w-64 rounded-lg overflow-hidden shadow-lg hover:scale-105 transition duration-500 cursor-pointer place-self-center mb-10">
                    <div
                    class="mx-2 my-2 mt-3">
                        <img 
                        :src="job.companyBanner" 
                        class="w-full h-2/5 my-auto object-cover rounded-t-3xl">
                    </div>
                    <div class="w-full basis-2/5 my-auto">
                        <div class="mx-4 mb-4 px-4 my-4">
                            <h2 class="font-bold"> {{ job.jobPosition }} </h2>
                            <p class="text-gray-500"> {{ job.company }} </p>
                        </div>

                        <div class="text-sm text-gray-500 mx-4 px-4">
                            <div>
                                <img 
                                src="https://www.svgrepo.com/show/156159/location.svg" 
                                alt="Location Logo"
                                width="20"
                                height="20"
                                class="inline">
                                <span class="mx-4"> {{ job.location }} </span>   
                            </div>
                            <div class="mt-4">
                                <img 
                                src="https://www.svgrepo.com/show/16795/briefcase.svg" 
                                alt="Sector Logo"
                                width="20"
                                height="20"
                                class="inline">
                                <span class="mx-4"> {{ job.jobSector }} </span>
                            </div>
                            <div class="mt-4">
                                <img 
                                src="https://www.svgrepo.com/show/21938/time.svg" 
                                alt="Job Type Logo"
                                width="20"
                                height="20"
                                class="inline">
                                <span class="mx-4"> {{ job.type }} </span>
                            </div>
                        </div>
                    </div>

                    <!-- Apply Button -->
                    <div class="py-6 w-full basis-1/5 flex justify-center my-auto" >
                        <button class="w-1/2 h-fit bg-blue-900 hover:opacity-80 text-sm text-white rounded-xl shadow-lg p-2">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    const jobs = [
        {
            id: 1,
            companyBanner: "https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg",
            jobPosition: "Software Engineer",
            company: "Setel",
            location: "Kuala Lumpur",
            jobSector: "Technology",
            type: "Full-time"
        },
        {
            id: 2,
            companyBanner: "https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg",
            jobPosition: "Front-end Developer",
            company: "Setel",
            location: "Kuala Lumpur",
            jobSector: "Technology",
            type: "Full-time"
        },
        {
            id: 3,
            companyBanner: "https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg",
            jobPosition: "Back-end Developer",
            company: "Setel",
            location: "Kuala Lumpur",
            jobSector: "Technology",
            type: "Full-time"
        },
        {
            id: 4,
            companyBanner: "https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg",
            jobPosition: "Back-end Developer",
            company: "Setel",
            location: "Kuala Lumpur",
            jobSector: "Technology",
            type: "Full-time"
        },
        {
            id: 5,
            companyBanner: "https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg",
            jobPosition: "Back-end Developer",
            company: "Setel",
            location: "Kuala Lumpur",
            jobSector: "Technology",
            type: "Full-time"
        },
        {
            id: 6,
            companyBanner: "https://www.thebrandlaureate.com/wp-content/uploads/2020/12/Setel-1024x576-1.jpg",
            jobPosition: "Back-end Developer",
            company: "Setel",
            location: "Kuala Lumpur",
            jobSector: "Technology",
            type: "Full-time"
        }
    ]
    export default {
        setup() {
            return {
                jobs,
            }
        }
    }
</script>

<style scoped>
.card-img {
    /* max-height: 150px; */
    border-radius: 30px;
}
</style>
