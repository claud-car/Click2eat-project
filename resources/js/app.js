import { createApp } from "vue";
import SearchByType from "./components/search/SearchByType";
import TablePagination from "./components/dashboard/TablePagination";
import createForm from "./components/dashboard/restaurants/createForm";
import Dashboard from "./components/dashboard/Dashboard";

createApp({
    components: {
        Dashboard,
        SearchByType,
        TablePagination,
        createForm
    }
}).mount('#app')
