<template>
    <div class="restaurant relative border-1 rounded-lg overflow-hidden" @mouseover.prevent="isHovered=true" @mouseout.prevent="isHovered=false">
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
                <a :href="`/restaurants/${slug}`" class="w-full">
                    <span v-show="!isHovered" :class="{ fadeIn: isHovered }">{{ name }}</span>
                    <span v-show="isHovered" :class="{ fadeIn: isHovered }" class="flex items-center gap-3">
                        View Menu
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4 10v4h9l-3.5 3.5l2.42 2.42L19.84 12l-7.92-7.92L9.5 6.5L13 10H4z" fill="currentColor"/></svg>
                    </span>
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
