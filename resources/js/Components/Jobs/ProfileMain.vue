<template>
    <div class="h-[2230px] sm:h-[2150px] lg:h-[1500px] xl:h-[1300px] container  mx-auto my-5 p-5">
        <div class="lg:ml-10 xl:ml-20 lg:flex wrap">
            <!-- Left Side -->
            <div class="w-full xl:w-4/12">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-green-400">
                    <div class="image overflow-hidden">
                        <img v-if="$page.props.selectedJob.cover_image_url" 
                        class="h-auto max-h-[214.84px] w-full mx-auto"
                        style="object-fit: cover;"
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="filter: invert(23%) sepia(92%) saturate(1741%) hue-rotate(229deg) brightness(100%) contrast(97%);"><path d="M23.27 19.743l-11.946-11.945c-.557-.557-.842-1.331-.783-2.115.115-1.485-.395-3.009-1.529-4.146-1.03-1.028-2.375-1.537-3.723-1.537-.507 0-1.015.072-1.506.216l3.17 3.17c.344 1.589-1.959 3.918-3.566 3.567l-3.17-3.17c-.145.492-.217 1-.217 1.509 0 1.347.51 2.691 1.537 3.721 1.135 1.136 2.66 1.646 4.146 1.53.783-.06 1.557.226 2.113.783l11.947 11.944c.468.468 1.103.73 1.763.73 1.368 0 2.494-1.108 2.494-2.494 0-.638-.244-1.276-.73-1.763zm-1.77 2.757c-.553 0-1-.448-1-1s.447-1 1-1 1 .448 1 1-.447 1-1 1zm-8.375-15.753l6.723-6.747 4.152 4.128-6.722 6.771-1.012-1.012 5.488-5.533c.165-.165.165-.435-.001-.602-.166-.165-.436-.165-.601 0l-5.489 5.533-.935-.936 5.495-5.539c.166-.166.166-.437 0-.603-.168-.166-.436-.166-.603.001l-5.494 5.539-1.001-1zm-3.187 9.521l-5.308 5.35c-.166.166-.437.166-.603 0-.165-.166-.166-.436 0-.602l5.308-5.351-.936-.935-5.301 5.343c-.165.168-.435.167-.601.001-.166-.167-.166-.436 0-.602l5.3-5.343-1.004-1.004-5.745 5.787-1.048 5.088 5.203-.937 5.743-5.786-1.008-1.009z"/></svg>
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
                            <div class="flex items-center space-x-2 font-semibold leading-8 mb-3 mt-10">
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
                        <div>
                            <div v-if="$page.props.selectedJob.allowance" class="flex items-center space-x-2 font-semibold leading-8 mb-3 mt-10 md:mt-0 lg:mt-10 xl:mt-0">
                                <span class="h-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="filter: invert(23%) sepia(92%) saturate(1741%) hue-rotate(229deg) brightness(100%) contrast(97%);"><path d="M17 12c-3.313 0-6 2.687-6 6s2.687 6 6 6 6-2.687 6-6-2.687-6-6-6zm.5 8.474v.526h-.5v-.499c-.518-.009-1.053-.132-1.5-.363l.228-.822c.478.186 1.114.383 1.612.27.574-.13.692-.721.057-1.005-.465-.217-1.889-.402-1.889-1.622 0-.681.52-1.292 1.492-1.425v-.534h.5v.509c.362.01.768.073 1.221.21l-.181.824c-.384-.135-.808-.257-1.222-.232-.744.043-.81.688-.29.958.856.402 1.972.7 1.972 1.773.001.858-.672 1.315-1.5 1.432zm1.624-10.179c1.132-.223 2.162-.626 2.876-1.197v.652c0 .499-.386.955-1.007 1.328-.581-.337-1.208-.6-1.869-.783zm-2.124-5.795c2.673 0 5-1.007 5-2.25s-2.327-2.25-5-2.25c-2.672 0-5 1.007-5 2.25s2.328 2.25 5 2.25zm.093-2.009c-.299-.09-1.214-.166-1.214-.675 0-.284.334-.537.958-.593v-.223h.321v.211c.234.005.494.03.784.09l-.116.342c-.221-.051-.467-.099-.708-.099l-.072.001c-.482.02-.521.287-.188.399.547.169 1.267.292 1.267.74 0 .357-.434.548-.967.596v.22h-.321v-.208c-.328-.003-.676-.056-.962-.152l.147-.343c.244.063.552.126.828.126l.208-.014c.369-.053.443-.3.035-.418zm-11.093 13.009c1.445 0 2.775-.301 3.705-.768.311-.69.714-1.329 1.198-1.899-.451-1.043-2.539-1.833-4.903-1.833-2.672 0-5 1.007-5 2.25s2.328 2.25 5 2.25zm.093-2.009c-.299-.09-1.214-.166-1.214-.675 0-.284.335-.537.958-.593v-.223h.321v.211c.234.005.494.03.784.09l-.117.342c-.22-.051-.466-.099-.707-.099l-.072.001c-.482.02-.52.287-.188.399.547.169 1.267.292 1.267.74 0 .357-.434.548-.967.596v.22h-.321v-.208c-.329-.003-.676-.056-.962-.152l.147-.343c.244.063.552.126.828.126l.208-.014c.368-.053.443-.3.035-.418zm4.003 8.531c-.919.59-2.44.978-4.096.978-2.672 0-5-1.007-5-2.25v-.652c1.146.918 3.109 1.402 5 1.402 1.236 0 2.499-.211 3.549-.611.153.394.336.773.547 1.133zm-9.096-3.772v-.651c1.146.917 3.109 1.401 5 1.401 1.039 0 2.094-.151 3.028-.435.033.469.107.926.218 1.37-.888.347-2.024.565-3.246.565-2.672 0-5-1.007-5-2.25zm0-2.5v-.652c1.146.918 3.109 1.402 5 1.402 1.127 0 2.275-.176 3.266-.509-.128.493-.21 1.002-.241 1.526-.854.298-1.903.483-3.025.483-2.672 0-5-1.007-5-2.25zm11-11v-.652c1.146.918 3.109 1.402 5 1.402 1.892 0 3.854-.484 5-1.402v.652c0 1.243-2.327 2.25-5 2.25-2.672 0-5-1.007-5-2.25zm0 5v-.652c.713.571 1.744.974 2.876 1.197-.661.183-1.287.446-1.868.783-.622-.373-1.008-.829-1.008-1.328zm0-2.5v-.651c1.146.917 3.109 1.401 5 1.401 1.892 0 3.854-.484 5-1.401v.651c0 1.243-2.327 2.25-5 2.25-2.672 0-5-1.007-5-2.25z"/></svg>
                                </span>
                                <span class="tracking-wide">Salary</span>
                            </div>
                            <ul v-if="$page.props.selectedJob.allowance" class="space-y-2">
                                <li>
                                    {{ $page.props.selectedJob.allowance }}
                                </li>
                            </ul>

                            <div v-if="$page.props.selectedJob.duration" class="flex items-center space-x-2 font-semibold leading-8 mb-3 mt-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="filter: invert(23%) sepia(92%) saturate(1741%) hue-rotate(229deg) brightness(100%) contrast(97%);"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.848 12.459c.202.038.202.333.001.372-1.907.361-6.045 1.111-6.547 1.111-.719 0-1.301-.582-1.301-1.301 0-.512.77-5.447 1.125-7.445.034-.192.312-.181.343.014l.985 6.238 5.394 1.011z"/></svg>
                                <span class="tracking-wide">Duration</span>
                            </div>
                            <ul v-if="$page.props.selectedJob.duration" class="space-y-2">
                                <li>
                                    {{ $page.props.selectedJob.duration }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Lat section grid -->
                </div>
                    <template v-if="$page.props.user">
                        <a
                        v-if="$page.props.user.id == $page.props.selectedJob.user_id"
                        :href="route('jobs.edit', {'id': $page.props.selectedJob.id})"
                        class="flex mt-6 justify-center items-center">
                            <button
                            type="button"
                            class="bg-indigo-600 hover:bg-indigo-700 text-base text-center text-white font-bold rounded-xl shadow-md px-8 py-2">
                            Edit
                            </button>
                        </a>
                        <a
                        v-else
                        :href="route('jobs.apply', {'id': $page.props.selectedJob.id})"
                        class="flex mt-6 justify-center items-center"
                        >
                            <button
                            type="button"
                            class="bg-indigo-600 hover:bg-indigo-700 text-base text-center text-white font-bold rounded-xl shadow-md px-8 py-2">
                            Apply
                            </button>
                        </a>
                    </template>
                    <template v-else>
                        <a 
                        :href="route('jobs.apply', {'id': $page.props.selectedJob.id})"
                        class="flex mt-6 justify-center items-center"
                        >
                            <button
                            type="button"
                            class="bg-indigo-600 hover:bg-indigo-700 text-base text-center text-white font-bold rounded-xl shadow-md px-8 py-2">
                            Apply
                            </button>
                        </a>
                    </template>
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