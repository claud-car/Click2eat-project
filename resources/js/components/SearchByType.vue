<template>
    <div>
        <ul>
            <li v-for="type in types">{{ type.name }}</li>
        </ul>
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

<style scoped>

</style>
