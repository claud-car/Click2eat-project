<template>
    <div class="w-full flex flex-col lg:flex-row lg:justify-between">
        <FormDetails v-show="$store.state.step === 0" />
        <FormPayment v-show="$store.state.step === 1" />
        <order-confirmed v-show="$store.state.step === 2" />
        <Summary />
    </div>
</template>

<script>
import Summary from "./Summary";
import FormDetails from "./content/FormDetails";
import FormPayment from "./content/FormPayment";
import OrderConfirmed from "./content/OrderConfirmed";

export default {
    name: "StepContent",
    components: {OrderConfirmed, FormPayment, FormDetails, Summary}
}
</script>

<style scoped>

</style>
