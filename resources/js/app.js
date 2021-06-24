require('./bootstrap');

require('alpinejs');

import { createApp } from "vue";

createApp({
    data() {
        return {
            msg: "prova"
        }
    },
    created() {
        console.log(this.msg)
    }
}).mount('#app')
