<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Move-In</title>
</head>
<body>
    @include('layout.headerLogin')
    <div class="flex flex-row ml-[50px] mt-[200px]">
        <img src="/image/home3.png" class="w-[500px] flex h-[400px]" alt="">
        <div class="flex flex-col ml-[50px]">
            <h1 class="font-semibold text-[64px] tracking-[50px]">MOVE.IN</h1>
            <h3 class="mt-[30px] text-[20px]">Jasa Pemindahan Barang untuk Pindah Kos</h3>
            <h4 class="mt-[100px] font-semibold text-[20px]">Rp. 300.000,00</h4>
        </div>
    </div>
    <div class="flex justify-end mr-[150px]">
        <a href="/payment/movein" class="p-3 text-[16px] justify-center flex w-[150px] text-sm font-semibold text-white bg-[#4FA095] rounded-lg">BOOK</a>
    </div>
</body>
</html>