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

            this.items[index].qty++

            return true
        }
    }

    add(item) {
        if (this.checkId(item)) {
            if (!this.checkDuplicate(item)) {
                item.qty = 1;
                this.items.push(item)
            }
            this.store()
            return true
        }
        else return false
    }

    increaseQty(item) {
        this.items.forEach(itemStored => {
            if (itemStored.id === item.id) {
                itemStored.qty++
                this.store()
                return
            }
        })
    }

    decreaseQty(item) {
        this.items.forEach(itemStored => {
            if (itemStored.id === item.id) {
                itemStored.qty--
                this.store()
                return
            }
        })
    }

    getStorage() {
        if (!localStorage.getItem('cart')) return

        this.items = JSON.parse(localStorage.getItem('cart'))
    }

    getAll() {
        return this.items
    }

    store(products) {
        if (products) localStorage.setItem('cart', JSON.stringify(products))
        else localStorage.setItem('cart', JSON.stringify(this.items))
    }

    count() {
        let tot = 0
        return this.items.reduce((totalQty, item) => {
            return totalQty + item.qty
        }, tot)
    }

    removeItem(item) {
        this.items = this.items.filter(itemStored => itemStored.id !== item.id)
        this.store()
    }

    clear() {
        localStorage.clear()
        this.items = []
    }
}

export default Cart
