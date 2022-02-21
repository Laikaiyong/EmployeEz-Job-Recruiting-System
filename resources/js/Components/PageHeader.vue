<template>
  <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white">
            <Popover>
                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                    <div class="flex items-center flex-grow flex-shrink-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="#">
                            <span class="sr-only">Logo</span>
                            <img class="h-8 w-auto sm:h-10" src="/img/EmployeEz.png" />
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <PopoverButton class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Open main menu</span>
                            <MenuIcon class="h-6 w-6" aria-hidden="true" />
                            </PopoverButton>
                        </div>
                        </div>
                    </div>
                    <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                        <a class="font-medium text-indigo-600 hover:text-indigo-500">Home</a>
                        <template v-if="canLogin">
                            <a v-if="$page.props.user" :href="route('dashboard')" class="font-medium text-gray-500 hover:text-gray-900">
                                Dashboard
                            </a>

                            <template v-else>
                                <a :href="route('login')" class="font-medium text-gray-500 hover:text-gray-900">
                                    Log in
                                </a>

                                <a v-if="canRegister" :href="route('register')" class="font-medium text-gray-500 hover:text-gray-900">
                                    Register
                                </a>
                            </template>
                        </template>
                    </div>
                    </nav>
                </div>

                <transition enter-active-class="duration-150 ease-out" enter-from-class="opacity-0 scale-95" enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in" leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
                    <PopoverPanel focus class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto" src="/img/EmployeEz.png" alt="" />
                            </div>
                            <div class="-mr-2">
                                <PopoverButton class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close main menu</span>
                                <XIcon class="h-6 w-6" aria-hidden="true" />
                                </PopoverButton>
                            </div>
                        </div>
                        <div class="px-2 pt-2 pb-3 space-y-1v text-center">
                        <a class="font-medium text-indigo-600 hover:text-indigo-500">Home</a>
                        </div>
                        <template v-if="canLogin">
                            <div v-if="$page.props.user" class="px-2 pt-2 pb-3 space-y-1 text-center">
                                <a :href="route('dashboard')" class="font-medium text-gray-500 hover:text-gray-900">
                                    Dashboard
                                </a>
                            </div>

                            <template v-else>
                                <div class="px-2 pt-2 pb-3 space-y-1 text-center">
                                <a :href="route('login')" class="font-medium text-gray-500 hover:text-gray-900">
                                    Log in
                                </a>
                                </div>

                                <div v-if="canRegister" class="px-2 pt-2 pb-3 space-y-1 text-center">
                                <a :href="route('register')" class="font-medium text-gray-500 hover:text-gray-900">
                                    Register
                                </a>
                                </div>
                            </template>
                        </template>
                    </div>
                    </PopoverPanel>
                </transition>
            </Popover>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Link } from '@inertiajs/inertia-vue3';
    import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue';
    import { MenuIcon, XIcon } from '@heroicons/vue/outline';

    export default defineComponent({
        components: {
            Link,
            Popover,
            PopoverButton,
            PopoverPanel,
            MenuIcon,
            XIcon,
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })
</script>

<style>

</style>