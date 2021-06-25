require('./bootstrap');

require('alpinejs');

import { createApp } from "vue";
import SearchByType from "./components/search/SearchByType";

createApp({
    components: {
        SearchByType,
    },
    data() {
        return {}
    }
}).mount('#app')
