import { createApp } from "vue";
import SearchByType from "./components/search/SearchByType";
import Dashboard from "./components/dashboard/Dashboard";
import TablePagination from "./components/dashboard/TablePagination";
import createBusinessesForm from "./components/dashboard/restaurants/createBusinessesForm";
import updateBusinessesForm from "./components/dashboard/restaurants/updateBusinessessForm";
import createPlatesForm from "./components/dashboard/restaurants/plates/createPlatesForm";

createApp({
    components: {
        Dashboard,
        SearchByType,
        TablePagination,
        createBusinessesForm,
        updateBusinessesForm,
        createPlatesForm,
    }
}).mount('#app')
