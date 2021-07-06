<template>
    <div>
        <form class="flex items-center" @submit.prevent="subscribe" @keydown="errors.clear($event.target.name)">
            <div class="lg:bg-white rounded-full">
                <input type="text" v-model="email"
                       class="p-6 rounded-full border-none w-11/12 lg:w-auto text-gray-500 focus:ring-0"
                       placeholder="Enter your email">
                <!--                <button type="submit"
                                        class="py-6 px-8 lg:my-auto my-5 lg:my-10 w-11/12 lg:w-auto rounded-full border-white lg:border-4 bg-orange p-1 disabled:opacity-50 disabled-cursor-default"
                                        :disabled="!email">Subscribe
                                </button>-->
                <SubscribeBtn />
            </div>
        </form>
        <p class="text-red-600 flex gap-1 mt-2 ml-5" v-if="errors.has('email')">
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
</template>

<script>
import Errors from "../core/Errors";
import SubscribeBtn from "./SubscribeBtn";

const axios = require('axios')

export default {
    name: "Newsletter",
    components: {SubscribeBtn},
    data() {
        return {
            email: '',
            errors: new Errors()
        }
    },
    methods: {
        subscribe() {
            axios.post('/api/newsletter', {
                email: this.email
            })
            .then(response => {
                if (response.status === 200) {

                }
            })
            .catch(error => {
                this.errors.set(error.response.data.errors)
            });
        }
    }
}
</script>

<style scoped>
.disabled-cursor-default {
    cursor: default;
}
</style>
