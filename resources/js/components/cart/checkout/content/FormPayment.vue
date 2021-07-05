<template>
    <div id="payment" class="w-2/3">
        <div class="mb-12">
            <a class="text-yellow cursor-pointer" @click="previous"><i class="fas fa-long-arrow-alt-left"></i> Go to details</a>
        </div>
        <form id="payment-form" class="w-full">
            <section>
                <div class="bt-drop-in-wrapper">
                    <div id="bt-dropin"></div>
                </div>
            </section>
            <button class="w-60 my-10 bg-orange bg-gradient-to-r from-yellow to-orange rounded-full" type="submit">
                <h3 class="text-white text-xl p-5">Confirm order</h3>
            </button>
        </form>
    </div>
</template>

<script>
const axios = require('axios')

export default {
    name: "FormPayment",
    methods: {
        previous() {
            sessionStorage.setItem('step', 'details')
            document.querySelector('#payment').style.display = 'none'
            document.querySelector('#details').style.display = 'block'
            document.querySelector('#stepPayment').classList.add('text-gray-300')
        }
    }
}
</script>

<style scoped>

</style>
