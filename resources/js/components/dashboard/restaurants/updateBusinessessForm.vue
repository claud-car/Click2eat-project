<template>
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <success :message="messages" @clear="clearMessage" class="mb-12" />
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Business Information</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Provide the information about your activity.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form @submit.prevent="addBusiness" enctype="multipart/form-data">
                    <div class="shadow overflow-hidden rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-12">
                                    <label for="business_name" class="block text-sm font-medium text-gray-700">Business name</label>
                                    <input type="text" v-model="form.name" id="business_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-12">
                                    <label for="street_address" class="block text-sm font-medium text-gray-700">Street address</label>
                                    <input type="text" v-model="form.street" id="street_address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-12 sm:col-span-6 lg:col-span-2">
                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" v-model="form.city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 lg:col-span-2">
                                    <label for="state" class="block text-sm font-medium text-gray-700 whitespace-nowrap">State / Province</label>
                                    <input type="text" v-model="form.province" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 lg:col-span-2">
                                    <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                                    <input type="text" v-model="form.zip" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-12">
                                    <h4 class="font-medium text-gray-700">Typologies</h4>
                                    <div class="grid grid-cols-6 gap-6 mt-4">
                                        <div v-for="type in types" class="flex items-start col-span-2">
                                            <div class="flex items-center h-5">
                                                <input :id="type.name" v-model="form.types" type="checkbox" :value="type.id"
                                                       class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"/>
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label :for="type.name" v-text="type.name" class="font-medium text-gray-700"></label>
                                            </div>
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
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
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

import Success from "../alerts/Success";

export default {
    name: "updateBusinessesForm",
    components: { Success },
    props: ['originalData', 'types', 'oldTypes'],
    data() {
        return {
            form: {
                name: '',
                street: '',
                city: '',
                province: '',
                zip: '',
                types: [],
                thumb: null
            },
            messages: []
        }
    },
    created() {
        this.form.name = this.originalData.name
        this.form.street = this.originalData.street
        this.form.city = this.originalData.city
        this.form.province = this.originalData.province
        this.form.zip = this.originalData.zip
        this.form.types = this.oldTypes
    },
    methods: {
        addImage(event) {
            this.form.thumb = event.target.files[0]
        },
        addBusiness() {
            let data = new FormData()
            data.append('_method', 'PATCH');
            data.append('name', this.form.name)
            data.append('street', this.form.street)
            data.append('city', this.form.city)
            data.append('province', this.form.province)
            data.append('zip', this.form.zip)
            data.append('types', JSON.stringify(this.form.types))
            data.append('thumb', this.form.thumb)

            axios.post(`/dashboard/restaurants/${this.originalData.slug}/edit`, data)
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
