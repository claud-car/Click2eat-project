class Cart {
    constructor() {
        this.items = []
    }

    add(item) {
        this.getStorage()

        if (!this.checkDuplicate(item)) {
            item.qty = 1;
            this.items.push(item)
        }

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
    }
}

export default Cart
