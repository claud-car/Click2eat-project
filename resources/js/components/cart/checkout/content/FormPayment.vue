<template>
    <div class="w-4/5 lg:w-3/5 font-bold m-auto">
        <div class="tables flex lg:justify-around flex-col xl:flex-row">
            <div class="mr-10 mb-10 payment-table bg-gray-100 lg:w-3/5 p-8 rounded-lg lg:h-96">
                <div class="img flex mb-8">
                    <img src="{{url('/images/icons/check-circle.svg')}}" alt="">
                    <p class="ml-6 text-xl">Credit Card</p>
                </div>
                <hr>
                <div class="my-4">
                    <p class="text-lg">Card number</p>
                    <input placeholder="xxxx xxxx xxxx xxxx" type="text" class="block mt-2 w-full rounded-full p-input mb-6">
                    <div class="flex mt-4 flex-col lg:flex-row">
                        <div class="left">
                            <p class="text-lg">Expiration date</p>
                            <input placeholder="mm" type="text" class="block mt-2 w-full md:w-1/2 lg:w-11/12 rounded-full p-input mb-6">
                        </div>
                        <div class="center lg:mt-7">
                            <input placeholder="yy" type="text" class="block mt-2 w-full md:w-1/2 lg:w-11/12 rounded-full p-input mb-6">
                        </div>
                        <div class="right">
                            <p class="text-lg">Security code</p>
                            <input placeholder="CVV" type="text" class="block mt-2 w-full md:w-1/2 lg:w-11/12 rounded-full p-input mb-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="w-60 my-10 lg:ml-10 bg-orange bg-gradient-to-r from-yellow to-orange rounded-full">
            <h3 class="text-white text-xl p-5">Confirm order</h3>
        </button>
    </div>
</template>

<script>
export default {
    name: "FormPayment"
}
</script>

<style scoped>

</style>
