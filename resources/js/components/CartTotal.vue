<template>
    <div class="cart relative">
        <a href="/cart" class="text-white hover:no-underline">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 aria-hidden="true"
                 focusable="false"
                 width="1em" height="1em"
                 style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                 preserveAspectRatio="xMidYMid meet"
                 viewBox="0 0 24 24"
            >
                <path
                    d="M12 13a5 5 0 0 1-5-5h2a3 3 0 0 0 3 3a3 3 0 0 0 3-3h2a5 5 0 0 1-5 5m0-10a3 3 0 0 1 3 3H9a3 3 0 0 1 3-3m7 3h-2a5 5 0 0 0-5-5a5 5 0 0 0-5 5H5c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2z"
                    fill="currentColor"
                />
            </svg>
        </a>
        <span class="absolute -top-0.5 -right-1 w-4 h-4 text-xs font-bold bg-orange rounded-full flex justify-center items-center pointer-events-none" v-text="counter"></span>
    </div>
</template>

<script>
export default {
    name: "CartTotal",
    computed: {
        counter() {
            return this.$store.state.counter
        }
    }
}
</script>

<style scoped>

</style>
