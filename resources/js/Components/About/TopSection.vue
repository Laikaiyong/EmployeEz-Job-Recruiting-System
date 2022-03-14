<template>
<div>
  <div class="mt-10">
        <h1 class="text-center font-semibold text-xl sm:text-3xl lg:text-4xl">
          We make job seeking easy
        </h1>
        <p class="text-center mx-8 mt-5">
            Learn about our company's aims, values and meet the people behind it 
        </p>
  </div>
  <div>
      <div class="max-w-2xl mx-auto py-24 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
        <div class="grid">
            <div class="pink-bg-card">
            <img
            class=""
            src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/Goals_re_lu76.svg" 
            alt="">
            </div>
        </div>
        <div>
            <h3 class="text-lg font-bold">Mission</h3>
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Explore. Innovate. Create</h2>
            <p class="mt-4 text-gray-500">At EmployeEz, we aim to provide a platform for fresh graduates to initiate a simpler way of job seeking. We are humble yet confident, inquisitive yet disciplined. We love what we do, and it shows in our results.</p>
        </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
}
</script>

<style scoped>
.pink-bg-card {
  position: relative;
  display: inline-block;
}
.pink-bg-card::before {
  content: ' ';
  position: absolute;
  left: 50px;
  top: 50px;
  right: 0;
  bottom: 50px;
  background: #FFB6B6;
  border-radius: 30px;
  z-index: -1;
}
.pink-bg-card>img {
  position: relative;
}
</style>