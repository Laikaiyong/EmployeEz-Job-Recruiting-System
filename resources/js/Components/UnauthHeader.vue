<template>
    <div>
        <jet-banner />

        <div class="bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="baseUrl">
                                    <img class="h-8 w-auto sm:h-10" src="/img/EmployeEz.png" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <jet-nav-link :href="route('jobs')" :active="route().current('jobs')">
                                      Job
                              </jet-nav-link>
                              <jet-nav-link :href="route('company')" :active="route().current('company')">
                                      Company
                              </jet-nav-link>
                              <jet-nav-link :href="route('aboutus')" :active="route().current('aboutus')">
                                      About
                              </jet-nav-link>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <jet-nav-link :href="route('login')" class="font-medium text-gray-500 hover:text-gray-900">
                                    Log in
                                </jet-nav-link>
                            </div>

                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <jet-nav-link v-if="canRegister" :href="route('register')" class="font-medium text-gray-500 hover:text-gray-900">
                                    Register
                                </jet-nav-link>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"></slot>
                </div>
            </header>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                <div class="pt-1 pb-3 space-y-1">
                    <jet-responsive-nav-link :href="route('jobs')" :active="route().current('jobs')">
                        Job
                    </jet-responsive-nav-link>
                </div>
                <div class="pt-1 pb-3 space-y-1">
                    <jet-responsive-nav-link :href="route('company')" :active="route().current('company')">
                        Company
                    </jet-responsive-nav-link>
                </div>
                <div class="pt-1 pb-3 space-y-1">
                    <jet-responsive-nav-link :href="route('aboutus')" :active="route().current('aboutus')">
                        About
                    </jet-responsive-nav-link>
                </div>
                <div class="pt-1 pb-3 space-y-1">
                    <jet-responsive-nav-link :href="route('login')">
                        Log in
                    </jet-responsive-nav-link>
                </div>

                <div class="pt-1 pb-3 space-y-1">
                    <jet-responsive-nav-link v-if="canRegister" :href="route('register')">
                        Register
                    </jet-responsive-nav-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';
    import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue';
    import { MenuIcon, XIcon } from '@heroicons/vue/outline';
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'

    var baseUrl = window.location.origin;

    export default defineComponent({
        components: {
            Link,
            Popover,
            PopoverButton,
            PopoverPanel,
            MenuIcon,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            XIcon,
        },

        data() {
            return {
                showingNavigationDropdown: false,
                baseUrl
            }
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean
        }
    })
</script>

<style>

</style>