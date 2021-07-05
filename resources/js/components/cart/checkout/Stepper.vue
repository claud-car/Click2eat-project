<template>
    <div class="flex justify-center items-center mt-12">
        <div class="w-full md:flex md:flex-wrap lg:flex-nowrap justify-start justify-around border-b-2 pb-5 lg:pb-10 ">
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">01.</h1>
                <h3 id="stepDetails" class="text-xl lg:text-2xl pl-7">Order details</h3>
            </div>
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">02.</h1>
                <h3 id="stepPayment" class="text-xl lg:text-2xl text-gray-300 pl-5">Payment</h3>
            </div>
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">03.</h1>
                <h3 id="stepConfirmed" class="text-xl lg:text-2xl text-gray-300 pl-5">Finish</h3>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Stepper",
    mounted() {
        if (sessionStorage.getItem('step') === 'payment')
            document.querySelector('#stepPayment').classList.remove('text-gray-300')
    },
    methods: {
        previous() {
            if (sessionStorage.getItem('step') === 'payment') {
                sessionStorage.setItem('step', 'details')
                document.querySelector('#payment').style.display = 'none'
                document.querySelector('#details').style.display = 'block'
                document.querySelector('#stepPayment').classList.add('text-gray-300')
            }
        }
    }
}
</script>

<style scoped>

</style>
