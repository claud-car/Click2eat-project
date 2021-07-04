import { createStore } from 'vuex'
import { cart } from "../app";

export default createStore({
    state: {
        counter: 0,
        products: [],
        subTotal: 0,
        index: 0,
        form: {
            name: '',
            lastname: '',
            number: '',
            email: '',
            city: '',
            address: '',
            info: ''
        }
    },
    mutations: {
        getProducts(state) {
            state.products = cart.getAll()
        },
        getIndexOfProduct(state, item) {
            let index = 0
            let i = 0

            state.products.forEach(productStored => {
                if (productStored.id === item.id) {
                    state.index = i
                    return
                }
                i++
            })
        },
        increaseProductQty(state, index) {
            state.products[index].qty++
            cart.store(state.products)
        },
        decreaseProductQty(state, index) {
            state.products[index].qty--
            cart.store(state.products)
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
        resetCounter(state) {
            state.counter = 0
        },
        onDelete(state, value) {
            state.counter -= value
        },
        checkExistingForm(state) {
            if (sessionStorage.getItem('order')) {
                state.form = JSON.parse(sessionStorage.getItem('order'))
            }
        }
    },
    actions: {
    },
    modules: {
    }
})
