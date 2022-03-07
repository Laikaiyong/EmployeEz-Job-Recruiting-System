<template>
    <div class="flex flex-wrap justify-center lg:items-center max-w-7xl mx-auto my-10 lg:px-10 lg:py-10">
        <div class="text-center lg:text-left lg:w-1/2 px-10">
            <h1 class="font-extrabold text-3xl">Having questions?</h1>
            <p class="text-gray-500">Don't worry, we have your back! Just drop a message here.</p>
        </div>
        <div class="lg:w-1/2 px-10 py-10">
            <form @submit.prevent="submit">
                <div class="mt-4">
                    <jet-label for="Name" value="Name" />
                    <jet-input
                    id="name"
                    type="text"
                    class="mt-1 block w-full rounded-xl text-sm" 
                    required autocomplete="name" 
                    placeholder="Enter your name" />
                </div>
                <div class="mt-4">
                    <jet-label for="Email" value="Email" />
                    <jet-input
                    id="email"
                    type="email"
                    class="mt-1 block w-full rounded-xl text-sm" 
                    required autocomplete="email" 
                    placeholder="Enter your email" />
                </div>
                <div class="mt-4">
                    <jet-label for="Message" value="Message" />
                    <textarea name="" 
                    id="" 
                    cols="50" 
                    rows="10"
                    v-model="message"
                    class="mt-1 block w-full rounded-xl text-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm resize-none" 
                    placeholder="Enter your message here" />
                </div>
                <div class="mt-6 flex justify-center md:justify-end mb-6">
                    <jet-button 
                    class="ml-0 rounded-3xl px-16 py-4" >
                        Submit
                    </jet-button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button.vue';
    import JetLabel from '@/Jetstream/Label.vue';
    import JetInput from '@/Jetstream/Input.vue';

export default {
    components: {
        JetButton,
        JetLabel,
        JetInput
    }, 
}
</script>

<style scoped>

</style>