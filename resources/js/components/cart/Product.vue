<template>
    <div class="w-11/12 xl:w-1/2 h-36 border-b-2 border-gray-200 flex flex-row justify-around items-center">
        <div class="w-1/3 md:w-1/2 flex flex-row items-center transform md:translate-x-10">
            <div class="hidden md:inline-block bg-blue h-20 w-20">
                <img :src="`/storage/${item.thumb_path}`" alt="">
            </div>
            <div class="md:ml-5">
                <p class="font-bold" v-text="item.name"></p>
                <span class="text-gray-400" v-text="`€${item.price} per portion`"></span>
            </div>
        </div>
        <incrementor :qty="item.qty" @increased="increaseProduct(item)" @decreased="decreaseProduct(item)" />
        <div class="w-1/4 flex items-center">
            <div>
                <h3 class="text-2xl text-bold text-yellow" v-text="price"></h3>
            </div>
            <div class="text-gray-400 ml-5 md:ml-16 xl:ml-32">
                <i class="fas fa-times text-3xl text-yellow" @click="deleteProduct(item)"></i>
            </div>
        </div>
    </div>
</template>

<script>
import {cart} from "../../app";
import Incrementor from "./Incrementor";

export default {
    name: "Product",
    components: {Incrementor},
    props: ['item'],
    data() {
        return {
            actualQty: 0
        }
    },
    computed: {
        price() {
            return `€${this.item.price*this.actualQty}`
        }
    },
    created() {
        this.actualQty = this.item.qty
        console.log(this.actualQty)
    },
    methods: {
        increaseProduct(item) {
            cart.increaseQty(item)
            this.actualQty++
        },
        decreaseProduct(item) {
            cart.decreaseQty(item)
            this.actualQty--
        },
        deleteProduct(item) {
            cart.removeItem(item)
            this.$emit('deleted')
        }
    }
}
</script>

<style scoped>

</style>
