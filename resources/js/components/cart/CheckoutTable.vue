<template>
    <div class="">
        <div class="my-20 flex flex-col justify-center">
            <div class="mx-auto bg-gray-100 w-11/12 md:w-96 rounded-lg transform lg:translate-x-60">
                <div class="box-content p-10">
                    <div class="py-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">
                        <div>
                            <p>Subtotal</p>
                        </div>
                        <div>
                            <p v-text="`€${$store.state.subTotal}`"></p>
                        </div>
                    </div>
                    <div v-if="$store.state.subTotal" class="py-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">
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
                            <p v-text="`€${total}`"></p>
                        </div>
                    </div>
                </div>
                <div class="mb-10 mx-5 flex justify-center items-center">
                    <button class="w-full bg-orange bg-gradient-to-r from-yellow to-orange rounded-full disabled:opacity-50 disabled-default" @click="checkout" :disabled="!$store.state.products.length">
                        <h3 class="text-white text-xl p-5">Checkout</h3>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CheckoutTable",
    data() {
        return {
            delivery: 7
        }
    },
    computed: {
        total() {
            return this.$store.state.products.length ? this.$store.state.subTotal + this.delivery : 0
        }
    },
    created() {
        this.$store.commit('calcSubtotal')
    },
    methods: {
        checkout() {
            window.location.replace('/cart/checkout')
        }
    }
}
</script>

<style scoped>
    .disabled-default:disabled {
        cursor: default;
    }
</style>
