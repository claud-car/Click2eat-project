<template>
    <div class="card flex flex-col border rounded-2xl justify-between overflow-hidden">
        <div class="image-card h-56">
            <img class="w-full h-full object-cover" :src="`/storage/${item.thumb_path}`">
        </div>
        <div class="text-card flex flex-col items-center pt-8 px-16 overflow-anywhere text-center">
            <h3 class="py-2 text-3xl" v-text="item.name"></h3>
            <h5 class="my-4" v-text="item.description"></h5>
            <h3 class="py-2 text-2xl" v-text="`€ ${item.price}`"></h3>
        </div>
        <div class="flex justify-center">
            <button class="m-16 bg-orange hover:bg-orange text-white font-bold py-3 px-12 rounded-full whitespace-nowrap" @click="addToCart(item)">Add To Cart</button>
        </div>
    </div>
</template>

<script>
import { cart } from "../../app";

export default {
    name: "Plate",
    props: ['item'],
    methods: {
        addToCart(item) {
            cart.add(item)
            cart.store()
        }
    }
}
</script>

<style scoped>

</style>
