<template>
    <warning v-if="Object.keys(errors).length">
        <p v-for="error in errors">{{ error[0] }}</p>
    </warning>
    <form @submit.prevent="login">
        <div>
            <input
                id="email"
                type="email"
                name="email"
                v-model="form.email"
                placeholder="Email"
                class="block mt-1 w-full rounded-full p-input"
                required
                autofocus
            />
        </div>
        <div class="mt-4">
            <input
                id="password"
                type="password"
                name="password"
                v-model="form.password"
                class="block mt-8 w-full rounded-full p-input"
                placeholder="Password"
                required autocomplete="current-password" />
        </div>
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">Remember me</span>
            </label>
        </div>
        <div class="button flex justify-center">

            <button class="bg-orange hover:bg-orange text-white my-4 text-center w-full rounded-full p-input">Log in</button>

        </div>
        <div class="flex items-center justify-between md:mt-2">
            <p class="text-sm w-full">No account? <a class="text-orange" href="/register">Register now</a></p>
            <a class="md:whitespace-nowrap underline text-sm text-gray-600 hover:text-gray-900" href="/forgot-password">
                Forgot your password?
            </a>
        </div>
    </form>
</template>

<script>
import Warning from "./dashboard/alerts/Warning";
const axios = require('axios')

export default {
    name: "Login",
    components: {Warning},
    data() {
        return {
            form: {
                email: '',
                password: ''
            },
            errors: {}
        }
    },
    methods: {
        login() {
            let data = new FormData();
            data.append('email', this.form.email)
            data.append('password', this.form.password)

            axios.post('/login', data)
                .then(() => {
                    window.location.replace('/dashboard')
                })
            .catch(error => {
                this.errors = error.response.data.errors
            })
        }
    }
}
</script>

<style scoped>

</style>
