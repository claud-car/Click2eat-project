<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize">About us</h1>
            </div>
        </div>
    </x-slot>

    {{-- team card container --}}
    <div class="my-20 flex justify-center items-center">
        <h1 class="text-5xl">Meet our team</h1>
    </div>
    <div class="flex justify-around items-center">
        {{-- card --}}
        <div class="w-96 text-center">
            <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col justify-center items-center relative border-2 border-yellow" style="background-image:url('./images/200px-Johnny_furioso.jpg')">
                <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6">                        
                    <h2 class="text-white">Claudio Carchietti</h2>
                </div>
            </div>
            <div>
                <a href="" class="text-blue-500">(indirizzo linkedin)</a>
                <p>Dice di andare a dormire presto. In realtà va in palestra e poi si mette a lavorare al progetto dalle 5 di mattina</p>
            </div>
        </div>
        <div class="w-96 text-center">
            <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col justify-center items-center relative border-2 border-yellow" style="background-image:url('./images/terry-heman.jpg')">
                <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6">                        
                    <h2 class="text-white">Andrea Emmanuele</h2>
                </div>
            </div>
            <div>
                <a href="" class="text-blue-500">(indirizzo linkedin)</a>
                <p>The man. The legend.</p>
            </div>
        </div>
        <div class="w-96 text-center">
            <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col justify-center items-center relative border-2 border-yellow" style="background-image:url('./images/Mr-Bean-Rowan-Atkinson.jpg')">
                <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6">                        
                    <h2 class="text-white">Flavio Secondini</h2>
                </div>
            </div>
            <div>
                <a href="" class="text-blue-500">(indirizzo linkedin)</a>
                <p>Una volta è riuscito a fare l'onda energetica</p>
            </div>
        </div>
        <div class="w-96 text-center">
            <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col justify-center items-center relative border-2 border-yellow" style="background-image:url('./images/200px-Johnny_furioso.jpg')">
                <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6">                        
                    <h2 class="text-white">Francesco Vito</h2>
                </div>
            </div>
            <div>
                <a href="" class="text-blue-500">(indirizzo linkedin)</a>
                <p>Il nuovo Steve Jobs</p>
            </div>
        </div>
    </div>

    <x-slot name="content"></x-slot>
</x-app-layout>