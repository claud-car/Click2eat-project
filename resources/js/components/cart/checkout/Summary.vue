<template>
    <div class="lg:w-2/6 lg:pl-8 mb-20 flex flex-col mt-12 lg:mt-20">
        <div class="bg-selago rounded-lg">
            <div class="box-content p-10">
                <h1 class="mb-5 text-2xl">Your Order</h1>
                <div v-for="product in products">
                    <div class="w-full text-gray-500">
                        <p v-text="product.name"></p>
                    </div>
                    <div class="pb-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">
                        <div class="text-gray-800">
                            <p v-text="`${product.qty}x`"></p>
                        </div>
                        <div class="text-gray-800">
                            <p v-text="`€${product.price*product.qty}`"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-content p-10">
                <div class="py-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">
                    <div>
                        <p>Subtotal</p>
                    </div>
                    <div>
                        <p v-text="`€${getSubtotal}`"></p>
                    </div>
                </div>
                <div class="py-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">
                    <div>
                        <p>Delivery</p>
                    </div>
                    <div>
                        <p v-text="`€${delivery}`"></p>
                    </div>
                </div>
                <div class="py-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">
                    <div>
                        <p>Total</p>
                    </div>
                    <div>
                        <p v-text="`€${getSubtotal+delivery}`"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {cart} from "../../../app";

export default {
    name: "Summary",
    data() {
        return {
            products: [],
            delivery: 7
        }
    },
    computed: {
        getSubtotal() {
            let subtotal = 0
            subtotal = this.products.reduce((tot, product) => tot + product.qty*product.price, subtotal)
            sessionStorage.setItem('amount', subtotal + this.delivery)
            return subtotal
        }
    },
    created() {
        this.products = cart.getAll()
    }
}
</script>

<style scoped>

</style>
