<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize text-yellow text-center">Benvenuto!</h1>
                <h1 class="Capitalize text-3xl mt-5">E grazie per aver visitato il nostro progetto</h1>
            </div>
        </div>
    </x-slot>

    {{-- team card container --}}
    <div class="my-20 flex justify-center items-center">
        <h1 class="text-6xl">Meet our team:</h1>
    </div>
    <div class="flex justify-center items-center">
        <div class="flex justify-around items-center w-11/12">
            {{-- card --}}
            <div class="w-96 text-center">
                <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col items-center relative border-2 border-orange" style="background-image:url('./images/200px-Johnny_furioso.jpg')">
                    <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6 border-2 border-yellow">                        
                        <h2 class="text-white text-xl">Claudio Carchietti</h2>
                    </div>
                </div>
                <div class="font-bold">
                    <a href="https://www.linkedin.com/in/claudio-carchietti-47575b213/" class="text-blue-500 text-xl">Linkedin</a>
                    <p class="mt-5">Claudio non dorme. Va in palestra fino alle 5 di mattina e poi comincia a lavorare al progetto.</p>
                </div>
            </div>
            <div class="w-96 text-center">
                <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col items-center relative border-2 border-orange" style="background-image:url('./images/terry-heman.jpg')">
                    <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6 border-2 border-yellow">                        
                        <h2 class="text-white text-xl">Andrea Emmanuele</h2>
                    </div>
                </div>
                <div class="font-bold">
                    <a href="https://www.linkedin.com/in/andreaemmanuele/" class="text-blue-500 text-xl">Linkedin</a>
                    <p class="mt-5">The man.</p>
                    <p>The legend.</p>
                </div>
            </div>
            <div class="w-96 text-center">
                <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col items-center relative border-2 border-orange bg-center" style="background-image:url('./images/Mr-Bean-Rowan-Atkinson.jpg')">
                    <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6 border-2 border-yellow">                        
                        <h2 class="text-white text-xl">Flavio Secondini</h2>
                    </div>
                </div>
                <div class="font-bold">
                    <a href="https://www.linkedin.com/in/flavio-secondini-a58336215/" class="text-blue-500 text-xl">Linkedin</a>
                    <p class="mt-5">Middle-end developer.</p>
                    <p>Una volta è riuscito a fare l'onda energetica.</p>
                </div>
            </div>
            <div class="w-96 text-center">
                <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col items-center relative border-2 border-orange" style="background-image:url('./images/papa-pugno.jpg')">
                    <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6 border-2 border-yellow">                        
                        <h2 class="text-white text-xl">Francesco Livio II</h2>
                    </div>
                </div>
                <div class="font-bold">
                    <a href="https://www.linkedin.com/in/francesco-emanuele-livio/" class="text-blue-500 text-xl">Linkedin</a>
                    <p class="mt-5">Ha aperto una startup di miracoli a domicilio.</p>
                    <p>Non ama i treni.</p>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="content"></x-slot>
</x-app-layout>