require('./bootstrap');

require('alpinejs');

import { createApp } from "vue";
import SearchByType from "./components/SearchByType";

createApp({
    components: {
        SearchByType,
    },
    data() {
        return {}
    }
}).mount('#app')
