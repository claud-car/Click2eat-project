<template>
    <div class="w-full xl:w-4/5 2xl:w-3/4 xl:mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 pt-16 text-blue">
        <plate v-for="item in items" :item="item" />
    </div>
</template>

<script>
import Plate from "./Plate";

export default {
    name: "Plates",
    components: { Plate },
    props: ['items'],
    data() {
        return {}
    }
}
</script>

<style scoped>

</style>
