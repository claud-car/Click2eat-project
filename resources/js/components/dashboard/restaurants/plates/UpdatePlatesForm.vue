<template>
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <success :message="messages" @clear="clearMessage" class="mb-12" />
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Plate Information</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Provide the information about this plate.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form @submit.prevent="addPlate" enctype="multipart/form-data">
                    <div class="shadow overflow-hidden rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-12">
                                    <label for="plate_name" class="block text-sm font-medium text-gray-700">Plate name</label>
                                    <input type="text" v-model="form.name" id="plate_name" autocomplete="plate-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-12">
                                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                    <textarea v-model="form.description" id="description" autocomplete="description" class="h-40 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </textarea>
                                </div>

                                <div class="col-span-12 sm:col-span-6 lg:col-span-2">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                          €
                                        </span>
                                        </div>
                                        <input type="text" v-model="form.price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00" />
                                        <div class="absolute inset-y-0 right-0 flex items-center">
                                            <label for="currency" class="sr-only">Currency</label>
                                            <select id="currency" name="currency" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                <option>EUR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 md:col-span-6 ml-auto">
                                    <div>
                                        <h4 class="text-base text-gray-900">Visibility</h4>
                                        <p class="text-sm text-gray-500">Make this plate visible or not to customers.</p>
                                    </div>
                                    <div class="flex gap-6 mt-4">
                                        <div class="flex items-center">
                                            <input id="visible" v-model="form.visibility" type="radio" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                                            <label for="visible" class="ml-3 block text-sm font-medium text-gray-700">
                                                Show
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="notvisible" v-model="form.visibility" type="radio" value="0" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                                            <label for="notvisible" class="ml-3 block text-sm font-medium text-gray-700">
                                                Do not show
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Cover photo
                                    </label>
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="thumb" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input id="thumb" type="file" class="sr-only" @change="addImage" />
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG up to 10MB
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <a :href="`/dashboard/restaurants/${restaurant.slug}/plates`" class="inline-flex justify-center py-2 px-4 shadow-sm text-sm font-medium text-black hover:underline">
                                Go back
                            </a>
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
const axios = require('axios');

import Success from "../../alerts/Success";

export default {
    name: "createPlatesForm",
    components: { Success },
    props: ['restaurant', 'originalData'],
    data() {
        return {
            form: {
                name: '',
                description: '',
                price: 0,
                visibility: null,
                thumb: null
            },
            messages: []
        }
    },
    created() {
        this.form.name = this.originalData.name
        this.form.description = this.originalData.description
        this.form.price = this.originalData.price
        this.form.visibility = this.originalData.is_visible
    },
    methods: {
        addImage(event) {
            this.form.thumb = event.target.files[0]
        },
        addPlate() {
            let data = new FormData()
            data.append('name', this.form.name)
            data.append('description', this.form.description)
            data.append('price', this.form.price)
            data.append('visibility', this.form.visibility)
            data.append('thumb', this.form.thumb)
            data.append('_method', 'PATCH')

            axios.post(`/dashboard/restaurants/${this.restaurant.slug}/plates/${this.originalData.slug}/edit`, data)
            .then(response => {
                this.messages = response.data
            })
            .catch(errors => {
                console.log(errors)
            });
        },
        clearMessage() {
            this.messages = []
        }
    }
}
</script>

<style scoped>

</style>
