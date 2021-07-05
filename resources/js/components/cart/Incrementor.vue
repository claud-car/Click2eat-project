<template>
    <div class="w-1/4 transform -translate-x-5">
        <div class="text-gray-400 flex flex-row items-center">
            <div class="flex flex-row items-center border-2 rounded-full box-content px-5 py-2">
                <div>
                    <button @click="decrease">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <div>
                    <input type="text" v-model="$store.state.products[index].qty" class="h-10 w-5 md:w-14 text-xl font-bold border-none text-center focus:ring-0" readonly>
                </div>
                <div>
                    <button @click="increase">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Incrementor",
    props: ['item'],
    data() {
        return {
            index: 0
        }
    },
    created() {
        this.index = this.$store.state.index
    },
    methods: {
        increase() {
            this.$store.commit('increaseProductQty', this.index)
            this.$store.commit('increaseCounter')
            this.$store.commit('calcSubtotal')
        },
        decrease() {
            if (this.$store.state.products[this.index].qty > 1) {
                this.$store.commit('decreaseProductQty', this.index)
                this.$store.commit('decreaseCounter')
                this.$store.commit('calcSubtotal')
            }
        }
    }
}
</script>

<style scoped>

</style>
