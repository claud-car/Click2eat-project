<template>
    <div class="mt-3 flex flex-col sm:flex-row">
        <div class="block relative mt-2 sm:mt-0">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"></path>
                        </svg>
                    </span>

            <input
                placeholder="Search"
                class="appearance-none rounded border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                v-model="search"
            />
        </div>
    </div>

    <success :message="messages" @clear="clearMessage"/>
    <warning-modal v-if="warning" :item="warning" @cancel="warning = null" @delete="deleteItem(warning)">
        <template v-slot:title>
            Delete {{ warning.name }}
        </template>
        <template v-slot:content>
            Are you sure you want to delete {{ warning.name }}? All of the data will be permanently removed. This action cannot be undone.
        </template>
    </warning-modal>

    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        {{ name }}
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        {{ subcol }}
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Created at
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="item in filteredRestaurants">
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full"
                                     :src="`/storage/${item.thumb_path}`"
                                     alt=""/>
                            </div>

                            <div class="ml-3">
                                <a :href="`/restaurants/${item.slug}`" class="text-gray-900 whitespace-no-wrap hover:underline" v-text="item.name"></a>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap" v-text="getFullAddress(item)"></p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap" v-text="getDate(item)"></p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a :href="`/dashboard/restaurants/${item.slug}/plates`">
                            <span
                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                <span aria-hidden
                                      class="absolute inset-0 bg-green-600 opacity-50 rounded-full"></span>
                                <span class="relative whitespace-nowrap">Manage Menu</span>
                            </span>
                        </a>
                        <a :href="`/dashboard/restaurants/${item.slug}/edit`">
                            <span
                                class="relative inline-block px-3 py-1 mt-1 lg:mt-0 lg:ml-4 font-semibold text-green-900 leading-tight">
                                <span aria-hidden
                                      class="absolute inset-0 bg-blue-300 opacity-60 rounded-full"></span>
                                <span class="relative">Edit</span>
                            </span>
                        </a>
                        <span
                            class="relative inline-block px-3 py-1 mt-1 lg:mt-0 lg:ml-4 font-semibold text-green-900 leading-tight cursor-pointer" @click="showWarning(item)">
                            <span aria-hidden
                                  class="absolute inset-0 bg-red-600 opacity-60 rounded-full"></span>
                            <span class="relative">Delete</span>
                        </span>
                    </td>
                </tr>
                </tbody>
            </table>
            <div v-if="!filteredRestaurants.length" class="flex justify-center w-full px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <p>La ricerca non ha prodotto risultati.</p>
            </div>
            <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                <span class="text-xs xs:text-sm text-gray-900">Showing 1 to 4 of {{ items.length}}</span>

                <div class="inline-flex mt-2 xs:mt-0">
                    <button
                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                        Prev
                    </button>
                    <button
                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Success from "../alerts/Success";
import WarningModal from "../modals/WarningModal";

const axios = require('axios');

export default {
    name: "TablePagination",
    components: {WarningModal, Success },
    props: ['name', 'subcol', 'items'],
    data() {
        return {
            itemsList: [],
            messages: [],
            search: '',
            warning: null
        }
    },
    computed: {
        filteredRestaurants() {
            return this.itemsList.filter(item => item.name.includes(this.search))
        }
    },
    created() {
        this.itemsList = this.items
    },
    methods: {
        getFullAddress(item) {
            return `${item.street}, ${item.city}, ${item.zip}, ${item.province}`
        },
        getDate(item) {
            let date = item.created_at.split('T')
            date = date[0].split('-')
            date = `${date[2]}-${date[1]}-${date[0]}`
            return date
        },
        showWarning(item) {
            this.warning = item
        },
        deleteItem(item) {
            axios
                .delete(`/dashboard/restaurants/${item.slug}/delete`)
                .then(response => {
                    this.messages = response.data
                    const index = this.itemsList.indexOf(item)
                    this.itemsList.splice(index, 1)
                })
                .catch(errors => {
                    console.log(errors)
                })
                .then(() => {
                    this.warning = null
                })

        },
        clearMessage() {
            this.messages = []
        }
    }
}
</script>

<style scoped>

</style>
