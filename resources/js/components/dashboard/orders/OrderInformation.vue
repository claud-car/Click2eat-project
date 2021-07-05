<template>
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="mb-5 text-3xl leading-6 font-medium text-gray-900">
      Order Details
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      All the info about this order
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Full name
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ details.customer_surname + ' ' + details.customer_name  }}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Contact
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ details.phone_number }}
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Email address
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ details.email }}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Address
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{ details.address }}
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Total
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            €{{ details.amount }}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Order:
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
            <li v-for="plate in plates" class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                <div class="flex items-center w-1/3">
                    <div class='h-10 rounded-full overflow-hidden'>
                        <img :src="`/storage/${plate.thumb_path}`" alt="" class="h-full"></div>
                        <div class="mx-4 font-bold">{{ plate.pivot.quantity }}x</div>
                        <div class="w-1/3">{{ plate.name }}</div>
                </div>

            </li>
          </ul>
        </dd>
      </div>
    </dl>
  </div>
</div>
</template>

<script>

export default {
    name: "OrderInformation",
    props: ['details', 'plates']
}
</script>

<style scoped>

</style>
