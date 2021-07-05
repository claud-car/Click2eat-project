<template>
    <div>
        <div class="container-full mx-auto">
            <div class="w-full px-3 py-5">
                <ul class="flex flex-wrap justify-center gap-2">
                    <Type v-for="type in types" :id="type.id" :type="type.name" @checked="addToCurrentTypesList" @unchecked="removeFromCurrentTypesList"/>
                </ul>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 py-8">
                    <restaurant-card
                        v-for="restaurant in filteredRestaurants.sort(compareByName)"
                        :cover="restaurant.thumb_path"
                        :name="restaurant.name"
                        :types="restaurant.types"
                        :slug="restaurant.slug"
                    />
                </div>
                <p v-if="!filteredRestaurants.length && currentTypes.length" class="text-center">
                    There aren't restaurants in this category.<br>
                    <strong>Sorry about that.</strong>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import Type from "./Type";
import RestaurantCard from "./RestaurantCard";

const axios = require('axios');

export default {
    name: "SearchByType",
    components: {
        RestaurantCard,
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
            if (!this.currentTypes.length) return restaurant
            return restaurant.types.some(type => this.currentTypes.includes(type.id.toString()))
        },
        addToCurrentTypesList(event) {
            this.currentTypes.push(event)
        },
        removeFromCurrentTypesList(event) {
            const index = this.currentTypes.indexOf(event)
            this.currentTypes.splice(index, 1)
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
