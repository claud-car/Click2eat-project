import { createApp } from "vue";
import SearchByType from "./components/search/SearchByType";
import Dashboard from "./components/dashboard/Dashboard";
import OrdersPagination from "./components/dashboard/orders/OrdersPagination";
import RestaurantsPagination from "./components/dashboard/restaurants/RestaurantsPagination";
import CreateBusinessesForm from "./components/dashboard/restaurants/CreateBusinessesForm";
import UpdateBusinessesForm from "./components/dashboard/restaurants/UpdateBusinessessForm";
import PlatesPagination from "./components/dashboard/restaurants/plates/PlatesPagination";
import CreatePlatesForm from "./components/dashboard/restaurants/plates/CreatePlatesForm";
import UpdatePlatesForm from "./components/dashboard/restaurants/plates/UpdatePlatesForm";
import User from "./components/User";
import LoginForm from "./components/LoginForm";
import RegisterForm from "./components/RegisterForm";

createApp({
    components: {
        Dashboard,
        SearchByType,
        OrdersPagination,
        RestaurantsPagination,
        CreateBusinessesForm,
        UpdateBusinessesForm,
        PlatesPagination,
        CreatePlatesForm,
        UpdatePlatesForm,
        User,
        LoginForm,
        RegisterForm
    }
}).mount('#app')
