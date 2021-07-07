<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl text-center">
                <h1 class="capitalize text-yellow">Benvenuto!</h1>
                <h1 class="mx-10 text-3xl mt-5">E grazie per aver visitato il nostro progetto</h1>
            </div>
        </div>
    </x-slot>

    {{-- team card container --}}
    <div class="mt-20 flex justify-center items-center">
        <h1 class="text-5xl md:text-6xl text-center">Meet our team</h1>
    </div>
    <div class="flex justify-center items-center">
        <div class="flex justify-around items-center w-11/12 flex-wrap">
            {{-- card --}}
            <div class="w-96 text-center mt-20">
                <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col items-center relative border-2 border-orange" style="background-image:url('./images/claudiocarchietti.jpg')">
                    <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6 border-2 border-yellow">
                        <h2 class="text-white text-xl">Claudio Carchietti</h2>
                    </div>
                </div>
                <div class="font-bold text-center">
                    <a href="https://www.linkedin.com/in/claudio-carchietti-47575b213/" class="text-blue-500 text-xl">Linkedin</a>
                </div>
            </div>
            <div class="w-96 text-centerr mt-20">
                <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col items-center relative border-2 border-orange" style="background-image:url('./images/andreaemmanuele.jpg')">
                    <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6 border-2 border-yellow">
                        <h2 class="text-white text-xl">Andrea Emmanuele</h2>
                    </div>
                </div>
                <div class="font-bold text-center">
                    <a href="https://www.linkedin.com/in/andreaemmanuele/" class="text-blue-500 text-xl">Linkedin</a>
                </div>
            </div>
            <div class="w-96 text-centerr mt-20">
                <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col items-center relative border-2 border-orange bg-center" style="background-image:url('./images/flavio-secondini.jpg')">
                    <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6 border-2 border-yellow">
                        <h2 class="text-white text-xl">Flavio Secondini</h2>
                    </div>
                </div>
                <div class="font-bold text-center">
                    <a href="https://www.linkedin.com/in/flavio-secondini-a58336215/" class="text-blue-500 text-xl">Linkedin</a>
                </div>
            </div>
            <div class="w-96 text-centerr mt-20">
                <div class="h-80 w-80 mx-auto mb-10 bg-cover flex flex-col items-center relative border-2 border-orange" style="background-image:url('./images/fra-livio.jpg')">
                    <div class="bg-blue box-border px-5 py-2 absolute bottom-0 transform translate-y-6 border-2 border-yellow">
                        <h2 class="text-white text-xl">Francesco Livio</h2>
                    </div>
                </div>
                <div class="font-bold text-center">
                    <a href="https://www.linkedin.com/in/francesco-emanuele-livio/" class="text-blue-500 text-xl">Linkedin</a>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="content"></x-slot>
</x-app-layout>
