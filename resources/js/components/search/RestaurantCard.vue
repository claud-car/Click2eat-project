<template>
    <div class="restaurant relative border-1 rounded-lg overflow-hidden">
        <img :src="`/storage/${cover}`" class="w-full h-full">
        <div class="absolute bottom-16 left-0 pb-1 z-20">
            <ul>
                <li
                    v-for="type in types"
                    v-text="type.name"
                    class="font-bold text-sm text-white type-bg-gradient py-1 px-2 rounded-r-full mb-1"
                >
                </li>
            </ul>
        </div>
        <div class="absolute bottom-0 left-0 w-full pl-8 pb-6">
            <h2 class="font-bold text-white text-2xl">
                <a :href="`/restaurants/${slug}`" class="w-full" @mouseenter="isHovered=true" @mouseout="isHovered=false">
                    <span v-show="!isHovered" class="pointer-events-none" :class="{ fadeIn: isHovered }">{{ name }}</span>
                    <span v-show="isHovered" class="pointer-events-none" :class="{ fadeIn: isHovered }">View Menu -></span>
                </a>
            </h2>
        </div>
    </div>
</template>

<script>
export default {
    name: "RestaurantCard",
    props: ['name', 'cover', 'types', 'slug'],
    data() {
        return {
            isHovered: false
        }
    },
    mounted() {
        this.$el.classList.add('fadeIn')
    }
}
</script>

<style scoped>
.restaurant::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%) no-repeat;
    height: 100px;
    background-size: cover;
    border-radius: 0 0 10px 10px;
}
.type-bg-gradient {
    background: linear-gradient(93.93deg, #D8AB37 0%, #F18345 100%);
}
.fadeIn {
    animation: appear 300ms ease-in-out;
}

@keyframes appear {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
</style>
