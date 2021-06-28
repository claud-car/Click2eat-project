import { createApp } from "vue";
import SearchByType from "./components/search/SearchByType";
import Dashboard from "./components/dashboard/Dashboard";
import RestaurantsPagination from "./components/dashboard/restaurants/RestaurantsPagination";
import CreateBusinessesForm from "./components/dashboard/restaurants/CreateBusinessesForm";
import UpdateBusinessesForm from "./components/dashboard/restaurants/UpdateBusinessessForm";
import PlatesPagination from "./components/dashboard/restaurants/plates/PlatesPagination";
import CreatePlatesForm from "./components/dashboard/restaurants/plates/CreatePlatesForm";
import UpdatePlatesForm from "./components/dashboard/restaurants/plates/UpdatePlatesForm";

createApp({
    components: {
        Dashboard,
        SearchByType,
        RestaurantsPagination,
        CreateBusinessesForm,
        UpdateBusinessesForm,
        PlatesPagination,
        CreatePlatesForm,
        UpdatePlatesForm,
    }
}).mount('#app')
