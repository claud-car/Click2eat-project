import { createStore } from 'vuex'
import { cart } from "../app";

export default createStore({
    state: {
        counter: 0,
        products: [],
        subTotal: 0
    },
    mutations: {
        getProducts(state) {
            state.products = cart.getAll()
        },
        removeProduct(state, item) {
            state.products = state.products.filter(product => product.id !== item.id)
        },
        calcSubtotal(state) {
            let tot = 0
            state.subTotal = state.products.reduce((total, item) => {
                return total + item.price * item.qty
            }, tot)
        },
        getTotalCartItems(state) {
            state.counter = cart.count()
        },
        increaseCounter(state) {
            state.counter++
        },
        decreaseCounter(state) {
            state.counter--
        },
        onDelete(state, value) {
            state.counter -= value
        }
    },
    actions: {
    },
    modules: {
    }
})
