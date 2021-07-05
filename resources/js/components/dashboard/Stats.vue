<template>
    <div class="w-full bg-white rounded-md border-2 border-gray-200 mb-12">
        <canvas ref="lastorders" class="my-4 mx-6"></canvas>
    </div>
</template>

<script>
import { Chart, ChartConfiguration, LineController, LineElement, PointElement, LinearScale, Title, CategoryScale } from 'chart.js'
import ordersData from "../../stats-data";

const axios = require('axios')

export default {
    name: 'Stats',
    props: ['id'],
    data() {
        return {
            ordersData,
            orders: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        }
    },
    mounted() {
        Chart.register(LineController, LineElement, PointElement, LinearScale, Title, CategoryScale);

        this.getLastOrders();
    },
    methods: {
        getLastOrders() {
            axios.get('/api/last-orders', {
                params: {
                    id: this.id
                }
            })
            .then(response => {
                let months = response.data

                let i = 0;

                Object.keys(months).forEach(month => {
                    if (month[0].includes('0') ) {
                        month = month[1]
                    }

                    this.orders[parseInt(month - 1)] = Object.values(months)[i]
                    i++
                })

                this.ordersData.data.datasets[0].data = this.orders

                const chart = new Chart(this.$refs.lastorders, this.ordersData);
            })
        }
    }
}
</script>
