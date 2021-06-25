<template>
    <div>
        <div class="container mx-auto">
            <div class="w-2/3 mx-auto py-5">
                <ul class="flex justify-between">
                    <Type v-for="type in types" :id="type.id" :type="type.name" @checked="addToCurrentTypesList" @unchecked="removeFromCurrentTypesList"/>
                </ul>

                <ul>
                    <li v-for="restaurant in filteredRestaurants.sort(compareByName)" v-text="restaurant.name"></li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
import Type from "./Type";
const axios = require('axios');

export default {
    name: "SearchByType",
    components: {
        Type
    },
    data() {
        return {
            types: [],
            restaurants: [],
            currentTypes: []
        }
    },
    created() {
        this.getTypes()
        this.getRestaurants()
    },
    computed: {
        filteredRestaurants() {
            return this.restaurants.filter(restaurant => this.filterRestaurants(restaurant))
        }
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
        },
        filterRestaurants(restaurant) {
            return restaurant.types.some(type => this.currentTypes.includes(type.id.toString()))
        },
        addToCurrentTypesList(event) {
            this.currentTypes.push(event)
            console.log(this.currentTypes)
            console.log(this.filteredRestaurants)
        },
        removeFromCurrentTypesList(event) {
            const index = this.currentTypes.indexOf(event)
            this.currentTypes.splice(index, 1)
            console.log(this.currentTypes)
        },
        compareByName(a, b) {
            if (a.name < b.name) return -1
            if (a.name > b.name) return 1
            return 0;
        }
    }
}
</script>

<style scoped>

</style>
