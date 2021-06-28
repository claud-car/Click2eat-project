<template>
    <div x-data="{ dropdownOpen: false }"  class="relative">
        <button
            class="flex items-center text-sm font-medium text-yellow hover:text-yellow hover:border-gray-300 focus:outline-none focus:text-orange focus:border-gray-300 transition duration-150 ease-in-out"
            @click="dropdownOpen = !dropdownOpen"
        >
            <div>{{ username }}</div>

            <div class="ml-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
        </button>

        <div v-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

        <div v-show="dropdownOpen" class="absolute top-7 right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10">
            <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange hover:text-white cursor-pointer">Dashboard</a>
            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange hover:text-white cursor-pointer" @click="logout">Logout</a>
        </div>
    </div>
</template>

<script>
const axios = require('axios')

export default {
    name: "user",
    props: ['username'],
    data() {
        return {
            dropdownOpen: false
        }
    },
    methods: {
        logout() {
            axios.post('/logout')
                .then(() => {
                    window.location.replace('/')
                })
        }
    }
}
</script>

<style scoped>

</style>
