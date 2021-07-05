<template>
    <div v-if="message.response" class="inline-flex w-full md:max-w-sm bg-white shadow-md rounded-lg overflow-hidden mt-2">
        <div class="flex justify-center items-center w-12 bg-green-500">
            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
            </svg>
        </div>

        <div class="-mx-3 py-2 px-4">
            <div class="mx-3">
                <span class="text-green-500 font-semibold">Success</span>
                <p class="text-gray-600 text-sm" v-text="message.response"></p>
            </div>
        </div>

        <div class="flex justify-center items-center w-10 ml-auto">
            <button @click="clearMessage">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41z" fill="#626262"/></svg>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Success",
    props: ['message'],
    methods: {
        clearMessage() {
            this.$emit('clear')
        }
    }
}
</script>

<style scoped>

</style>
