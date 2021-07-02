<template>
    <div class="w-full px-10 lg:w-checkoutMedium xl:w-checkoutLarge font-bold m-auto">
        <Stepper />
        <StepContent />
    </div>
</template>

<script>
import Stepper from "./Stepper";
import StepContent from "./StepContent";

export default {
    name: "Checkout",
    components: {StepContent, Stepper}
}
</script>

<style scoped>

</style>
