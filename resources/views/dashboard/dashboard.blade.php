<x-dashboard-layout>
    <dashboard>
        <div class="flex flex-col lg:flex-row">
            <div class="w-full lg:w-2/3">
                <h2 class="text-2xl mb-4">Last Received Orders</h2>
                <div>
                    <Stats :id="{{ json_encode(\Illuminate\Support\Facades\Auth::id()) }}"/>
                </div>
            </div>
            <div class="w-full mb-12 xl:w-1/3 lg:my-12 lg:ml-4 flex flex-col">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-orange">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z" fill="currentColor"/>
                            <path d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z" fill="currentColor"/>
                            <path d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z" fill="currentColor"/>
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">{{ $orders->count() }}</h4>
                        <div class="text-gray-500">Total Orders</div>
                    </div>
                </div>
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white mt-4">
                    <div class="p-3 rounded-full bg-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="2em" height="2em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path class="clr-i-solid clr-i-solid-path-1" d="M18 2a16 16 0 1 0 16 16A16 16 0 0 0 18 2zm7.42 25.16A10.88 10.88 0 0 1 9.23 21H5.84a1 1 0 0 1 0-2h3c0-.35-.05-.71-.05-1.07V17h-3a1 1 0 0 1 0-2h3.4a10.86 10.86 0 0 1 16.19-6.31a1.25 1.25 0 0 1-1.32 2.12A8.36 8.36 0 0 0 11.82 15h9.36a1 1 0 0 1 0 2h-9.85a7.72 7.72 0 0 0 0 2h9.82a1 1 0 0 1 0 2h-9.28a8.36 8.36 0 0 0 12.22 4a1.25 1.25 0 1 1 1.33 2.12z" fill="#FFF"/></svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">€{{ $orders->sum('amount') }}</h4>
                        <div class="text-gray-500">Total Income</div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-2xl">Orders</h2>
        <orders-pagination name="id #" subcol="customer address" :items="{{ json_encode($orders) }}" />
    <dashboard/>
</x-dashboard-layout>
