<template>
    <div class="w-full flex flex-col lg:flex-row lg:justify-between pt-12">
        <FormDetails id="details" />
        <FormPayment />
        <order-confirmed id="confirmed" />
        <Summary />
    </div>
</template>

<script>
import Summary from "./Summary";
import FormDetails from "./content/FormDetails";
import FormPayment from "./content/FormPayment";
import OrderConfirmed from "./content/OrderConfirmed";

const axios = require('axios');

export default {
    name: "StepContent",
    components: {OrderConfirmed, FormPayment, FormDetails, Summary},
    created() {
        !Object.keys(localStorage).includes('cart') ? window.location.replace('/') : null

        !Object.keys(sessionStorage).includes('step') ? sessionStorage.setItem('step', 'details') : null
    },
    mounted() {
        document.querySelector(`#${sessionStorage.getItem('step')}`).style.display = 'block'
    }
}
</script>

<style scoped>
#details,
#payment,
#confirmed {
    display: none;
}
</style>
