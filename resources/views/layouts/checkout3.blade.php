<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Norican -->
        <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
        <!-- Solway -->
        <link href="https://fonts.googleapis.com/css2?family=Solway:wght@700&display=swap" rel="stylesheet">
        <!-- Montserrat -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>

<!-- INIZIO STEP 3 -->

<div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
    <div class="text-white text-4xl md:text-6xl">
        <h1 class="capitalize">Checkout</h1>
    </div>
</div>

<div class="w-3/5 font-bold m-auto">
    <div class="flex justify-center items-center mt-12">
        <div class="w-full md:flex md:flex-wrap lg:flex-nowrap justify-start justify-around border-b-2 pb-5 lg:pb-10 ">
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">01.</h1>
                <h3 class="text-xl lg:text-2xl pl-7">Order details</h3>
            </div>
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">02.</h1>
                <h3 class="text-xl lg:text-2xl pl-5">Payment</h3>
            </div>
            <div class="flex flex-row items-center md:mt-5 lg:mt-0">
                <h1 class="text-4xl lg:text-6xl text-yellow">03.</h1>
                <h3 class="text-xl lg:text-2xl pl-5">Finish</h3>
            </div>
        </div>
    </div>

    <img class="m-auto text-4xl w-28 mt-10 mb-4" src="{{url('/images/icons/check-circle.svg')}}" alt="">
    <h2 class="text-center text-3xl">Thank you!</h2>
    <p class="text-center font-light mt-8">We have accepted your order and have already begun to cook. Your favorite food will be on your table soon.</p>

</div>
    
</body>
</html>