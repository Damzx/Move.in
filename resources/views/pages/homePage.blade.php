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
    @include('layout.headerLogin')
    <div class="flex flex-col">
        <div class="flex justify-center w-full mt-[50px]">
            <img class="flex w-[600px] h-[400px]" src="/image/home5.png" alt="">
        </div>
        <div class="flex mt-[50px] cursor-pointer justify-around w-full flex-row">
            <a href="/book/movein"><img class="w-[342px] h-[216px]" src="/image/home3.png" alt=""></a>
            <a href="/book/packin"><img class="w-[342px] h-[216px]" src="/image/home4.png" alt=""></a>
        </div>
        <div class="flex text-center justify-around mb-[50px]">
            <h3 class="text-[20px] mt-5 w-[342px]">Movin adalah layanan profesional kami yang dapat membantu anda mulai dari pengemasan hingga pegantar </h3>
            <h3 class="text-[20px] mt-5 w-[342px]">Packin adalah layanan profesional kami yang dapat membantu anda dalam proses pengemasan barang saja </h3>
        </div>
    </div>
</body>
</html>