<template>
    <div class="card flex flex-col border rounded-2xl justify-between overflow-hidden">
        <div class="image-card h-56">
            <img class="w-full h-full object-cover" :src="item.thumb_path">
        </div>
        <div class="text-card flex flex-col items-center pt-8 px-16 overflow-anywhere text-center">
            <h3 class="py-2 text-3xl" v-text="item.name"></h3>
            <h5 class="my-4" v-text="item.description"></h5>
            <h3 class="py-2 text-2xl" v-text="`€ ${item.price}`"></h3>
        </div>
        <div class="flex justify-center">
            <add-to-cart @add="check(item)" />
        </div>
    </div>
    <cart-modal v-if="warning" @cancel="warning = null" @continue="addToCart(item)">
        <template v-slot:title>
            All products will be lost
        </template>
        <template v-slot:content>
            Are you sure you want to continue? All of the products in the cart will be lost cause you can order only from one restaurant at time.
        </template>
    </cart-modal>
</template>

<script>
import { cart } from "../../app";
import CartModal from "../modals/CartModal";
import AddToCart from "./AddToCart";

export default {
    name: "Plate",
    components: {
        CartModal,
        AddToCart
    },
    props: ['item'],
    data() {
        return {
            warning: false,
        }
    },
    methods: {
        check(item) {
            this.warning = !cart.add(item)

            if (!this.warning) {
                this.$store.commit('increaseCounter')
            }
        },
        addToCart(item) {
            cart.clear()
            this.warning = !cart.add(item)
            this.$store.commit('resetCounter')
            this.$store.commit('increaseCounter')
        }
    }
}
</script>

<style scoped>

</style>
