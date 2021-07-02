<template>
    <div class="flex justify-center items-center mt-12">
        <div class="w-full md:flex md:flex-wrap lg:flex-nowrap justify-start justify-around border-b-2 pb-5 lg:pb-10 ">
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">01.</h1>
                <h3 class="text-xl lg:text-2xl pl-7">Order details</h3>
            </div>
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">02.</h1>
                <h3 class="text-xl lg:text-2xl pl-5" :class="{ 'text-gray-300': $store.state.step !== 1 }">Payment</h3>
            </div>
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">03.</h1>
                <h3 class="text-xl lg:text-2xl text-gray-300 pl-5" :class="{ 'text-gray-300': $store.state.step !== 2 }">Finish</h3>
            </div>
        </div>
    </div>
    <div class="my-12">
        <a class="text-yellow cursor-pointer" @click="previous"><i class="fas fa-long-arrow-alt-left"></i> Go Back</a>
    </div>
</template>

<script>
export default {
    name: "Stepper",
    methods: {
        previous() {
            this.$store.commit('previousStep')
        }
    }
}
</script>

<style scoped>

</style>
