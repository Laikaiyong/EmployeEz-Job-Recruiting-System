<template>
    <div class="h-[2000px] lg:h-[1000px] container  mx-auto my-5 p-5">
        <div class="lg:ml-10 xl:ml-20 lg:flex wrap">
            <!-- Left Side -->
            <div class="w-full xl:w-4/12">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-green-400">
                    <div class="image overflow-hidden">
                        <img v-if="$page.props.selectedJob.cover_image_url" 
                        class="h-auto w-full mx-auto"
                        :src="$page.props.selectedJob.cover_image_url"
                        alt="">
                        <img v-else
                        class="h-auto w-full mx-auto"
                        src="/img/EmployeEz banner.png">
                    </div>
                    <h1 class="text-gray-900 font-bold text-3xl leading-8 my-2">{{ $page.props.selectedJob.title }}</h1>
                    <h3 class="text-gray-600 font-lg text-xl text-semibold leading-6">{{ $page.props.selectedJob.company }}</h3>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto">
                                <span v-if="new Date($page.props.selectedJob.closing_date) > new Date()"
                                class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span>
                                <span v-else
                                class="bg-rose-500 py-1 px-2 rounded text-white text-sm">Closed</span>
                            </span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Posted on</span>
                            <span class="ml-auto">{{ ($page.props.selectedJob.created_at).slice(0, -17) }}</span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Updated on</span>
                            <span class="ml-auto">{{ ($page.props.selectedJob.updated_at).slice(0, -17) }}</span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Type</span>
                            <span class="ml-auto">{{ $page.props.selectedJob.type }}</span>
                        </li>
                         <li class="flex items-center py-3">
                            <span>Industry</span>
                            <span class="ml-auto">{{ $page.props.selectedJob.industry }}</span>
                        </li>
                         <li v-if="$page.props.selectedJob.allowance" class="flex items-center py-3">
                            <span>Duration</span>
                            <span class="ml-auto">{{ $page.props.selectedJob.allowance }}</span>
                        </li>
                        <li v-if="$page.props.selectedJob.duration" class="flex items-center py-3">
                            <span>Duration</span>
                            <span class="ml-auto">{{ $page.props.selectedJob.duration }}</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Related jobs card -->
                <div class="bg-white p-3 hover:shadow">
                    <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                        <span class="text-indigo-600">
                            <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </span>
                        <span>Latest jobs</span>
                    </div>
                    <div class="grid grid-cols-3">
                        <div
                        v-for="job in $page.props.relatedJobs"
                        :key="job"
                        class="text-center my-2">
                            <img class="h-16 w-16 mx-auto rounded-full"
                            style="object-fit: cover;"
                            :src="job.cover_image_url"
                            alt="">
                            <a :href="route('jobs.profile', {id: job.id})" class="text-gray-500 hover:text-gray-700">{{ job.title }}</a>
                        </div>
                    </div>
                </div>
                <!-- End of related jobs card -->
            </div>
            <!-- Right Side -->
            <div class="w-full xl:w-8/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- Description Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="h-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="filter: invert(23%) sepia(92%) saturate(1741%) hue-rotate(229deg) brightness(100%) contrast(97%);"><path d="M11.362 2c4.156 0 2.638 6 2.638 6s6-1.65 6 2.457v11.543h-16v-20h7.362zm.827-2h-10.189v24h20v-14.386c0-2.391-6.648-9.614-9.811-9.614zm4.811 13h-3v-1h3v1zm0 2h-3v1h3v-1zm0 3h-10v1h10v-1zm-5-6h-5v4h5v-4z"/></svg>
                        </span>
                        <span class="tracking-wide">Description</span>
                    </div>
                    <div class="my-6 text-justify">{{ $page.props.selectedJob.description }}</div>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Requirement section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="h-5">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" style="filter: invert(23%) sepia(92%) saturate(1741%) hue-rotate(229deg) brightness(100%) contrast(97%);"><path d="M9 21h-9v-2h9v2zm6.695-2.88l-3.314-3.13-1.381 1.47 4.699 4.54 8.301-8.441-1.384-1.439-6.921 7zm-6.695-1.144h-9v-2h9v2zm8-3.976h-17v-2h17v2zm7-4h-24v-2h24v2zm0-4h-24v-2h24v2z"/></svg>
                        </span>
                        <span class="tracking-wide">Requirement</span>
                    </div>
                    <div class="my-6 text-justify">{{ $page.props.selectedJob.requirement }}</div>
                </div>
                <!-- End of Requirement Section -->

                <!-- Beneficial section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="h-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="filter: invert(23%) sepia(92%) saturate(1741%) hue-rotate(229deg) brightness(100%) contrast(97%);"><path d="M11.362 2c4.156 0 2.638 6 2.638 6s6-1.65 6 2.457v11.543h-16v-20h7.362zm.827-2h-10.189v24h20v-14.386c0-2.391-6.648-9.614-9.811-9.614zm4.811 13h-3v-1h3v1zm0 2h-3v1h3v-1zm0 3h-10v1h10v-1zm-5-6h-5v4h5v-4z"/></svg>
                        </span>
                        <span class="tracking-wide">Bonus Skill</span>
                    </div>
                    <div class="my-6 text-justify">{{ $page.props.selectedJob.beneficial_skills }}</div>
                </div>
                <!-- End of Beneficial Section -->

                <div class="my-4"></div>

                <!-- Last two section -->
                <div class="bg-white p-3 rounded-sm">

                    <div class="grid md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span class="h-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="filter: invert(23%) sepia(92%) saturate(1741%) hue-rotate(229deg) brightness(100%) contrast(97%);">
                                        <path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/>
                                    </svg>
                                </span>
                                <span class="tracking-wide">Location</span>
                            </div>
                            <ul class="space-y-2">
                                <li>
                                    {{ $page.props.selectedJob.location }}
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 font-semibold leading-8 mb-3 mt-10 md:mt-0 lg:mt-10 xl:mt-0">
                                    <svg class="text-indigo-600 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                <span class="tracking-wide">Level</span>
                            </div>
                            <ul class="space-y-2">
                                <li>
                                    {{ $page.props.selectedJob.experience_level }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
}
</script>

<style scoped>
</style>