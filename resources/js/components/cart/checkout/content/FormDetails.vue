<template>
    <div class="lg:w-4/6">
        <div class="mb-12">
            <a href="/cart" class="text-yellow cursor-pointer"><i class="fas fa-long-arrow-alt-left"></i> Return to cart</a>
        </div>

        <form @submit.prevent="next" @keydown="errors.clear($event.target.name)">
            <div>
                <div>
                    <h1>Info about you:</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-6">
                    <div>
                        <input
                        ref="name"
                        name="name"
                        type="text"
                        placeholder="First name*"
                        v-model="$store.state.form.name"
                        data-required
                        class="p-3 mt-5 rounded-full border-gray-300 p-input w-full p-input"
                        >
                        <p class="text-red-600 flex gap-1 mt-2 ml-5" v-if="errors.get('name')">
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
                    <div>
                        <input
                        ref="lastname"
                        name="lastname"
                        type="text"
                        placeholder="Last name*"
                        v-model="$store.state.form.lastname"
                        data-required
                        class="p-3 mt-5 rounded-full border-gray-300 w-full p-input"
                        >
                        <p class="text-red-600 flex gap-1 mt-2 ml-5" v-if="errors.get('lastname')">
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
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-6">
                    <div>
                        <input
                        ref="number"
                        name="number"
                        type="text"
                        placeholder="Phone number*"
                        v-model="$store.state.form.number"
                        data-required
                        class="p-3 mt-6 rounded-full border-gray-300 w-full p-input"
                        >
                        <p class="text-red-600 flex gap-1 mt-2 ml-5" v-if="errors.get('number')">
                            <span class="text-xs" v-text="errors.get('number')"></span>
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
                    <div>
                        <input
                        ref="email"
                        name="email"
                        type="text"
                        placeholder="Email*"
                        v-model="$store.state.form.email"
                        data-required
                        class="p-3 mt-6 rounded-full border-gray-300 w-full p-input"
                        >
                        <p class="text-red-600 flex gap-1 mt-2 ml-5" v-if="errors.get('email')">
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
                </div>
            </div>
            <div class="mt-6">
                <div>
                    <h1>Delivery info:</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-6">
                    <div>
                        <input
                        ref="city"
                        name="city"
                        type="text"
                        placeholder="City*"
                        v-model="$store.state.form.city"
                        data-required
                        class="p-3 mt-6 rounded-full border-gray-300 w-full p-input"
                        >
                        <p class="text-red-600 flex gap-1 mt-2 ml-5" v-if="errors.get('city')">
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
                    <div>
                        <input
                        ref="address"
                        name="address"
                        type="text"
                        placeholder="Address*"
                        v-model="$store.state.form.address"
                        data-required
                        class="p-3 mt-6 rounded-full border-gray-300 w-full p-input"
                        >
                        <p class="text-red-600 flex gap-1 mt-2 ml-5" v-if="errors.get('address')">
                            <span class="text-xs" v-text="errors.get('address')"></span>
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
            <div class="mt-6">
                <div>
                    <h1>More details:</h1>
                </div>
                <textarea
                    ref="info"
                    placeholder="Specify any other information here"
                    v-model="$store.state.form.info"
                    name="info"
                    class="w-full box-border p-3 mt-5 h-32 rounded-2xl mb-6 border-gray-300 resize-none"
                >
                </textarea>
            </div>
            <button class="w-70 my-10 bg-orange bg-gradient-to-r from-yellow to-orange rounded-full disabled:opacity-50 disabled-cursor-default" :disabled="errors.any()">
                <h3 class="text-white text-xl p-5">Choose payment method</h3>
            </button>
        </form>
    </div>
</template>

<script>
import Errors from "../../../../core/Errors";

export default {
    name: "FormDetails",
    data() {
        return {
            errors: new Errors(),
        }
    },
    created() {
        this.$store.commit('checkExistingForm')
    },
    methods: {
        next() {
            let obj = {}

            Object.keys(this.$store.state.form).forEach(field => {
                if (!this.$store.state.form[field] && this.$refs[field].hasAttribute('data-required')) {
                    obj[field] = []
                    obj[field].push("This field is required.")
                }

                if (field === 'email') {
                    if(!this.validateEmail(this.$store.state.form[field])) {
                        !obj[field] ? obj[field] = [] : null

                        obj[field].push('This email is not valid')
                    }
                }
            })

            this.errors.set(obj)

            if (!this.errors.any()) {
                sessionStorage.setItem('order', JSON.stringify(this.$store.state.form))
                sessionStorage.setItem('step', 'payment')

                const details = document.querySelector('#details')
                const payment = document.querySelector('#payment')
                const stepper = document.querySelector('#stepPayment')

                stepPayment.classList.remove('text-gray-300')
                details.style.display = 'none'
                payment.style.display = 'block'
            }
        },
        validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
    }
}
</script>

<style scoped>
.disabled-cursor-default:disabled {
    cursor: default;
}
</style>
