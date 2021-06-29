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
                <form @submit.prevent="addBusiness" @keydown="errors.clear($event.target.name)" enctype="multipart/form-data">
                    <div class="shadow overflow-hidden rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-12">
                                    <label for="business_name" class="block text-sm font-medium text-gray-700">Business name</label>
                                    <input type="text" v-model="form.name" name="name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    <p class="text-red-600 flex gap-1 mt-1" v-if="errors.has('name')">
                                        <span class="text-xs" v-text="errors.get('name')"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                             focusable="false" width="1em" height="1em"
                                             style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M13 13h-2V7h2m0 10h-2v-2h2M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                </div>

                                <div class="col-span-12">
                                    <label for="street_address" class="block text-sm font-medium text-gray-700">Street address</label>
                                    <input type="text" v-model="form.street" name="street" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    <p class="text-red-600 flex gap-1 mt-1" v-if="errors.has('street')">
                                        <span class="text-xs" v-text="errors.get('street')"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                             focusable="false" width="1em" height="1em"
                                             style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M13 13h-2V7h2m0 10h-2v-2h2M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                </div>

                                <div class="col-span-12 sm:col-span-6 lg:col-span-2">
                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" v-model="form.city" name="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    <p class="text-red-600 flex gap-1 mt-1" v-if="errors.has('city')">
                                        <span class="text-xs" v-text="errors.get('city')"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                             focusable="false" width="1em" height="1em"
                                             style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M13 13h-2V7h2m0 10h-2v-2h2M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                </div>

                                <div class="col-span-6 lg:col-span-2">
                                    <label for="state" class="block text-sm font-medium text-gray-700 whitespace-nowrap">State / Province</label>
                                    <input type="text" v-model="form.province" name="province" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    <p class="text-red-600 flex gap-1 mt-1" v-if="errors.has('province')">
                                        <span class="text-xs" v-text="errors.get('province')"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                             focusable="false" width="1em" height="1em"
                                             style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M13 13h-2V7h2m0 10h-2v-2h2M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                </div>

                                <div class="col-span-6 lg:col-span-2">
                                    <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
                                    <input type="text" v-model="form.zip" name="zip" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    <p class="text-red-600 flex gap-1 mt-1" v-if="errors.has('zip')">
                                        <span class="text-xs" v-text="errors.get('zip')"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                             focusable="false" width="1em" height="1em"
                                             style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M13 13h-2V7h2m0 10h-2v-2h2M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                </div>

                                <div class="col-span-12">
                                    <h4 class="font-medium text-gray-700">Typologies</h4>
                                    <div class="grid grid-cols-6 gap-6 mt-4">
                                        <div v-for="type in types" class="flex items-start col-span-2">
                                            <div class="flex items-center h-5">
                                                <input
                                                    name="types"
                                                    v-model="form.types"
                                                    type="checkbox"
                                                    :value="type.id"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                                                    @click="errors.clear('types')"
                                                />
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label :for="type.name" v-text="type.name" class="font-medium text-gray-700"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-red-600 flex gap-1 mt-1" v-if="errors.has('types')">
                                        <span class="text-xs" v-text="errors.get('types')"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                             focusable="false" width="1em" height="1em"
                                             style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M13 13h-2V7h2m0 10h-2v-2h2M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
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
                                    <p class="text-red-600 flex gap-1 mt-1" v-if="errors.has('thumb')">
                                        <span class="text-xs" v-text="errors.get('thumb')"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                             focusable="false" width="1em" height="1em"
                                             style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M13 13h-2V7h2m0 10h-2v-2h2M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <a href="/dashboard/restaurants" class="inline-flex justify-center py-2 px-4 shadow-sm text-sm font-medium text-black hover:underline">
                                Go back
                            </a>
                            <button
                                type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-50"
                                :disabled="errors.any()"
                            >
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

import Errors from "../../../core/Errors";

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
            messages: [],
            errors: new Errors()
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
            this.errors.clear('thumb')
        },
        addBusiness() {
            let data = new FormData()
            data.append('_method', 'PATCH');
            data.append('name', this.form.name)
            data.append('street', this.form.street)
            data.append('city', this.form.city)
            data.append('province', this.form.province)
            data.append('zip', this.form.zip)
            data.append('types', this.form.types.length ? JSON.stringify(this.form.types) : '')
            data.append('thumb', this.form.thumb)

            axios.post(`/dashboard/restaurants/${this.originalData.slug}/edit`, data)
            .then(response => {
                this.messages = response.data
            })
            .catch(error => {
                this.errors.set(error.response.data.errors)
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
