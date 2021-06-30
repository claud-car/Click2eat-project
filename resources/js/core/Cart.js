import {cart} from "../app";

class Cart {
    constructor() {
        this.items = []
        this.getStorage()
    }

    checkId(item) {
        if (this.items.some(itemStored => itemStored.restaurant_id === item.restaurant_id) || !this.items.length) return true
    }

    checkDuplicate(item) {
        if (this.items.some(itemStored => itemStored.id === item.id)) {
            let index = 0
            let i = 0

            this.items.forEach(itemStored => {
                if (itemStored.id === item.id) {
                    index = i
                    return
                }
                i++
            })

            this.increaseQty(this.items[index])

            return true
        }
    }

    add(item) {
        if (this.checkId(item)) {
            if (!this.checkDuplicate(item)) {
                item.qty = 1;
                this.items.push(item)
            }
            cart.store()
            return true
        }
        else return false
    }

    increaseQty(item) {
        item.qty++
    }

    getStorage() {
        if (!localStorage.getItem('cart')) return

        this.items = JSON.parse(localStorage.getItem('cart'))
    }

    store() {
        localStorage.setItem('cart', JSON.stringify(this.items))
    }

    count() {
        return this.items.length
    }

    clear() {
        localStorage.clear()
        this.items = []
    }
}

export default Cart
