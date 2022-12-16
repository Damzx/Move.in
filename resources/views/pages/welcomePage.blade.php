<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Move-In</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layout.headerHome')
    <div class="flex flex-col">
        <div class="flex flex-col items-center mt-[200px]">
            <img class="w-[121px]" src="/image/move 3.png" alt="">
            <h1 class="mt-2 tracking-[50px] relative text-[64px] text-[#035397] font-bold">MOVE.IN</h1>
        </div>
        <div class="flex h-[450px] -mt-[330px] w-[500px] flex-row">
            <img src="/image/home1.png" alt="">
            <img class="ml-[510px]" src="/image/home2.png" alt="">
        </div>
        <div class="flex mt-[50px] justify-around w-full flex-row">
            <img class="w-[342px] h-[216px]" src="/image/home3.png" alt="">
            <img class="w-[342px] h-[216px]" src="/image/home4.png" alt="">
        </div>
        <div class="flex text-center justify-around mb-[50px]">
            <h3 class="text-[20px] mt-5 w-[342px]">Movin adalah layanan profesional kami yang dapat membantu anda mulai dari pengemasan hingga pegantar </h3>
            <h3 class="text-[20px] mt-5 w-[342px]">Packin adalah layanan profesional kami yang dapat membantu anda dalam proses pengemasan barang saja </h3>
        </div>
    </div>
</body>
</html>