<template>
    <Head title="Task"></Head>
    <page-header v-if="$page.props.user"></page-header>
    <div class="my-10 mx-auto grid grid-flow-row-dense md:grid-cols-6">
        <div
        v-for="company in $page.props.unverified"
        :key="company.id"
        class="my-8 mx-10 w-[321px] justify-self-center rounded-lg shadow-md md:w-full md:flex md:mx-0 md:max-w-3xl md:col-start-2 md:col-span-4">
            <img 
            v-if="company.cover_image_url != null"
            :src="company.cover_image_url" 
            class="object-cover w-full md:w-1/2 lg:w-1/3">
            <img 
            v-else 
            src="/img/EmployeEz banner.png"
            class="object-cover w-full md:w-1/2 lg:w-1/3">
            <div class="text-center md:text-left px-6 py-4">
                <h4 class="mb-3 text-base text-xl font-semibold tracking-tight text-indigo-700">
                {{ company.name }}
                </h4>
                <p class="text-sm leading-normal text-justify mb-8">
                {{ (company.description) ? (company.description).substring(0, 125) : "Description is empty" }} <a v-if="company.description != null" :href="route('user.profile', {'id': company.id, 'name': company.name})" class="text-sky-600">View Profile</a>
                </p>
                <a
                :href="route('user.profile', {'id': company.id, 'name': company.name})"
                class="
                rounded-md
                px-4
                py-2
                text-sm
                shadow
                bg-sky-800
                text-white
                hover:bg-sky-900">
                Profile
                </a>
                <button
                @click="verify(company.id, company.name)"
                class="
                rounded-md
                ml-8
                px-4
                py-2
                text-sm
                shadow
                bg-indigo-600
                text-white
                hover:bg-indigo-700">
                Verify
                </button>
            </div>
        </div>
    </div>
    <page-footer></page-footer>
</template>

<script>
    import { defineComponent } from 'vue';
    import PageHeader from '@/Components/PageHeader.vue';
    import PageFooter from '@/Components/PageFooter.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        components: {
            PageHeader,
            PageFooter,
            Head
        },
        data() {
             return {
                form: this.$inertia.form({
                    _method: 'PUT',
                    id: '',
                    name: ''
                }),
            }
        },
        methods: {
            verify(company_id, company_name)
            {
                this.form.id = company_id;
                this.form.name = company_name;
                this.form.post(`/verify/${company_id}`);
            }
        }
    })
</script>

<style scoped>

</style>