<template>
    <div>
        <div class="container mx-auto">
            <div class="w-1/2 mx-auto">
                <ul class="flex justify-between">
                    <li v-for="type in types">{{ type.name }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
const axios = require('axios');

export default {
    name: "SearchByType",
    data() {
        return {
            types: [],
            restaurants: []
        }
    },
    created() {
        this.getTypes()
        this.getRestaurants()
    },
    methods: {
        getTypes() {
            axios
                .get('/api/types')
                .then(response => this.types = response.data)
        },
        getRestaurants() {
            axios
                .get('/api/restaurants')
                .then(response => this.restaurants = response.data)
        }
    }
}
</script>

<style scoped lang="scss">

</style>
