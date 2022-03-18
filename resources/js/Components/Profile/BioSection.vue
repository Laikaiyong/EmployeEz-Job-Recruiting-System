<template>
      <div class="max-w-7xl mx-10 pb-20 sm:px-6 lg:px-8 lg:mx-0">
          <div class="lg:ml-10 xl:ml-32 py-10 bg-slate-50 rounded-xl hover:scale-105 transition duration-500 cursor-pointer  overflow-hidden shadow-lg">
              <h1 class="ml-8 text-2xl font-bold pt-2 lg:pt-0 flex items-center justify-center lg:justify-start">Bio</h1>
              <p class="pt-4 ml-8 flex items-center justify-center lg:justify-start">{{ ($page.props.selectedUser[0].description) ? $page.props.selectedUser[0].description : "None" }}</p>
          </div>
      </div>
</template>

<script>
export default {

}
</script>

<style>

</style>