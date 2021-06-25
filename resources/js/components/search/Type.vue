<template>
    <li>
        <a :data-type="id" v-text="type" class="unchecked on-hover" :class="{ checked: isActive }" @click="check"></a>
    </li>
</template>

<script>
export default {
    name: "Type",
    props: ['id','type'],
    data() {
        return {
            isActive: false
        }
    },
    methods: {
        check() {
            if (!this.isActive) {
                this.isActive = true
                this.$emit('checked', this.$el.firstChild.getAttribute('data-type'))
            }
            else {
                this.isActive = false
                this.$emit('unchecked', this.$el.firstChild.getAttribute('data-type'))
            }
        }
    }
}
</script>

<style scoped>
.unchecked {
    @apply text-gray-shuttle bg-selago py-1 px-3 border-2 border-solid border-transparent rounded-full inline-block cursor-pointer transition-colors
}

.on-hover {
    @apply hover:bg-white hover:border-yellow hover:text-yellow
}

.checked {
    @apply bg-white border-orange text-orange
}
</style>
