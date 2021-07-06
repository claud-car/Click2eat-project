<template>
    <form @submit.prevent="login" @keydown="errors.clear($event.target.name)">
        <div>
            <input
                id="email"
                type="email"
                name="email"
                v-model="form.email"
                placeholder="Email"
                class="block mt-1 w-full rounded-full p-input mb-2"
                autofocus
            />
            <p class="text-red-600 flex gap-1 ml-6" v-if="errors.has('email')">
                <span class="text-xs" v-text="errors.get('email')"></span>
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
        <div class="mt-4">
            <input
                id="password"
                type="password"
                name="password"
                v-model="form.password"
                class="block mt-8 w-full rounded-full p-input mb-2"
                placeholder="Password"
                autocomplete="current-password" />
            <p class="text-red-600 flex gap-1 ml-6" v-if="errors.has('password')">
                <span class="text-xs" v-text="errors.get('password')"></span>
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
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">Remember me</span>
            </label>
        </div>
        <div class="button flex justify-center">

            <button class="bg-orange bg-gradient-to-r from-yellow to-orange text-white my-4 text-center w-full rounded-full p-input">Log in</button>

        </div>
        <div class="flex items-center justify-between md:mt-2">
            <p class="text-sm w-full">No account? <a class="text-orange" href="/register">Register now</a></p>
            <a class="whitespace-nowrap underline text-sm text-gray-600 hover:text-gray-900" href="/forgot-password">
                Forgot your password?
            </a>
        </div>
    </form>
</template>

<script>
const axios = require('axios')

import Errors from "../core/Errors";

export default {
    name: "LoginForm",
    data() {
        return {
            form: {
                email: '',
                password: ''
            },
            errors: new Errors()
        }
    },
    methods: {
        login() {
            let data = new FormData();
            data.append('email', this.form.email)
            data.append('password', this.form.password)

            axios.post('/login', data)
                .then(() => {
                    window.location.href('/dashboard')
                })
            .catch(error => {
                this.errors.set(error.response.data.errors)
            })
        }
    }
}
</script>

<style scoped>

</style>
