<template>
    <form @submit.prevent="register" @keydown="errors.clear($event.target.name)">
        <div class="lg:flex lg:justify-center lg:items-center">
            <div class="lg:w-2/5 lg:mr-2 mb-2">
                <input id="name" class="block w-full rounded-full p-input mb-2" placeholder="Name *" type="text" name="name" v-model="form.name" autofocus />
                <p class="text-red-600 flex gap-1 ml-6" v-if="errors.has('name')">
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

            <div class="lg:w-2/5 lg:ml-2 mb-2">
                <input id="lastname" class="block w-full rounded-full p-input mb-2" placeholder="LastName *" type="text" name="lastname" v-model="form.lastname" autofocus />
                <p class="text-red-600 flex gap-1 ml-6" v-if="errors.has('lastname')">
                    <span class="text-xs" v-text="errors.get('lastname')"></span>
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

        <div class="lg:flex lg:justify-center lg:items-center mt-2">

            <div class="lg:w-2/5 lg:mr-2 mb-2">
                <input id="email" class="block w-full rounded-full p-input mb-2" placeholder="Email *" type="email" name="email" v-model="form.email" />
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

            <div class="lg:w-2/5 lg:ml-2 mb-2">
                <input
                    id="p_iva"
                    class="block w-full rounded-full p-input mb-2"
                    type="text"
                    name="p_iva"
                    v-model="form.pIva"
                    placeholder="Partita Iva *"
                />
                <p class="text-red-600 flex gap-1 ml-6" v-if="errors.has('p_iva')">
                    <span class="text-xs" v-text="errors.get('p_iva')"></span>
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

        <div class="lg:flex lg:justify-center lg:items-center mt-2">
            <div class="lg:w-2/5 lg:mr-2 mb-2">
                <input
                     id="password"
                     class="block mt-1 w-full rounded-full p-input mb-2"
                     placeholder="Password *"
                     type="password"
                     name="password"
                     v-model="form.password"
                     autocomplete="new-password"
                />
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

            <div class="lg:w-2/5 lg:ml-2 mb-2">
                <input
                    id="password_confirmation"
                    class="block mt-1 w-full rounded-full p-input mb-2"
                    type="password"
                    name="password_confirmation"
                    v-model="form.passwordConfirmation"
                    placeholder="Confirm Password *"
                />
                <p class="text-red-600 flex gap-1 ml-6" v-if="errors.has('password_confirmation')">
                    <span class="text-xs" v-text="errors.get('password_confirmation')"></span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                         focusable="false" width="1em" height="1em"
                         style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                         preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path
                            d="M13 13h-2V7h2m0 10h-2v-2h2M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2z"
                            fill="currentColor"
                        />
                    </svg>
                </p>
            </div>
        </div>

        <div class="lg:px-16">
            <button class="bg-orange hover:bg-orange text-white my-4 rounded-full p-input text-center w-full mt-4 disabled:opacity-50" :disabled="errors.any()">
                Create Account
            </button>
        </div>



        <div class="flex items-center justify-center mt-4">
            <p class="text-sm">Already have an account? <a class="text-orange" href="/login">Log in</a></p>
        </div>
    </form>
</template>

<script>
const axios = require('axios')
import Errors from "../core/Errors";

export default {
    name: "RegisterForm",
    data() {
        return {
            form: {
                name: '',
                lastname: '',
                email: '',
                pIva: '',
                password: '',
                passwordConfirmation: ''
            },
            errors: new Errors()
        }
    },
    methods: {
        register() {
            let data = new FormData
            data.append('name', this.form.name)
            data.append('lastname', this.form.lastname)
            data.append('email', this.form.email)
            data.append('p_iva', this.form.pIva)
            data.append('password', this.form.password)
            data.append('password_confirmation', this.form.passwordConfirmation)

            axios.post('/register', data)
                    .then(() => {
                        window.location.replace('/dashboard')
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
