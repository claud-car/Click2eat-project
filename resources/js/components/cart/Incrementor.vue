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
                    <input type="text" v-model="count" class="h-10 w-5 md:w-14 text-xl font-bold border-none text-center" readonly>
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
    props: ['qty'],
    data() {
        return {
            count: 0
        }
    },
    created() {
        this.count = this.qty
    },
    methods: {
        increase() {
            this.count++
            this.$emit('increased', this.count)
            this.$store.commit('increaseCounter')
        },
        decrease() {
            if (this.count > 1) {
                this.count--
                this.$emit('decreased', this.count)
                this.$store.commit('decreaseCounter')
            } else this.count = 1
        }
    }
}
</script>

<style scoped>

</style>
