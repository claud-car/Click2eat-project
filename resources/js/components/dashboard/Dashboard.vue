<template>
    <div class="flex h-screen bg-gray-200 font-roboto">
        <navigation-sidebar :open-side="isSidebarOpen" @close="closeSidebar" />

        <div class="flex-1 flex flex-col overflow-hidden">
            <navigation-header @open="openSidebar" />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-20">
                    <slot></slot>
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import NavigationHeader from "./NavigationHeader";
import NavigationSidebar from "./NavigationSidebar";

export default {
    name: "Dashboard",
    components: {NavigationSidebar, NavigationHeader},
    data() {
        return {
            isSidebarOpen: false
        }
    },
    methods: {
        openSidebar(value) {
            this.isSidebarOpen = value
        },
        closeSidebar(value) {
            this.isSidebarOpen = value
        }
    }
}
</script>

<style scoped>

</style>
