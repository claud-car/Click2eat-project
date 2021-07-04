<template>
    <div>
        <div class="mb-12">
            <a href="/" class="text-yellow cursor-pointer"><i class="fas fa-long-arrow-alt-left"></i> Still hungry? Keep buying</a>
        </div>
        <div class="w-2/3 mx-auto my-20">
            <img class="m-auto text-4xl w-28 mt-10 mb-4" src="/images/icons/check-circle.svg" alt="">
            <h2 class="text-center text-3xl">Thank you!</h2>
            <p class="text-center font-light mt-8">We have accepted your order and have already begun to cook. Your favorite food will be on your table soon.</p>
        </div>
    </div>
</template>

<script>
import {cart} from "../../../../app";

export default {
    name: "OrderConfirmed",
    unmounted() {
        cart.clear()
        this.$store.commit('getProducts')
        console.log(this.$store.state.products)
    }
}
</script>

<style scoped>

</style>
