<template>
    <div class="flex justify-center mt-20">
        <div class="w-full flex flex-col items-center">
            <div class="h-14 w-11/12 xl:w-1/2 bg-blue rounded-full text-white text-lg flex flex-row justify-around items-center">
                <div class="w-1/3 md:w-1/2">
                    <h3 class="md:ml-10">Product</h3>
                </div>
                <div class="w-1/4">
                    <h3>Quantity</h3>
                </div>
                <div class="w-1/4">
                    <h3>Price</h3>
                </div>
            </div>
            <product v-for="product in $store.state.products" :item="product" />
        </div>
    </div>
</template>

<script>
import {cart} from "../../app";

import Product from "./Product";

export default {
    name: "CartProducts",
    components: {Product},
    created() {
        this.$store.commit('getProducts')
    }
}
</script>

<style scoped>

</style>
