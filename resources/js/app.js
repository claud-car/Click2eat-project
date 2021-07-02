import { createApp } from "vue";
import store from './store'


import SearchByType from "./components/search/SearchByType";
import Dashboard from "./components/dashboard/Dashboard";
import OrdersPagination from "./components/dashboard/orders/OrdersPagination";
import OrderInformation from "./components/dashboard/orders/OrderInformation";
import RestaurantsPagination from "./components/dashboard/restaurants/RestaurantsPagination";
import CreateBusinessesForm from "./components/dashboard/restaurants/CreateBusinessesForm";
import UpdateBusinessesForm from "./components/dashboard/restaurants/UpdateBusinessessForm";
import PlatesPagination from "./components/dashboard/restaurants/plates/PlatesPagination";
import CreatePlatesForm from "./components/dashboard/restaurants/plates/CreatePlatesForm";
import UpdatePlatesForm from "./components/dashboard/restaurants/plates/UpdatePlatesForm";
import MobileBtn from "./components/mobile/MobileBtn";
import User from "./components/User";
import CartTotal from "./components/CartTotal";
import LoginForm from "./components/LoginForm";
import RegisterForm from "./components/RegisterForm";
import Plates from "./components/plates/Plates";
import CartProducts from "./components/cart/CartProducts";
import CheckoutTable from "./components/cart/CheckoutTable";

import Cart from "./core/Cart";

export const cart = new Cart()

createApp({
    components: {
        Dashboard,
        SearchByType,
        OrdersPagination,
        OrderInformation,
        RestaurantsPagination,
        CreateBusinessesForm,
        UpdateBusinessesForm,
        PlatesPagination,
        CreatePlatesForm,
        UpdatePlatesForm,
        MobileBtn,
        User,
        CartTotal,
        LoginForm,
        RegisterForm,
        Plates,
        CartProducts,
        CheckoutTable
    },
    created() {
        this.$store.commit('getTotalCartItems')
    }
}).use(store).mount('#app')
