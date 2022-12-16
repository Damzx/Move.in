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
            <div class="flex ml-[50px] mt-[50px] font-semibold tracking-[5px] flex-col">
                <h1>TOTAL PAYMENT</h1>
                <h4 class="mt-[10px] font-semibold text-[20px]"></h4>
            <h4 class="mt-[60px] font-bold text-[20px]">Select Payment Method</h4>
            </div>
        <div class="ml-[50px] mt-[50px] w-[600px]">
            <div class="flex flex-row justify-between p-3 bg-[#D9D9D9]">
                <h1 class="ml-[20px] items-center text-[20px]">Transfer</h1>
                <div class="flex flex-row">
                    <img class="h-[34px] mx-2" src="/image/bank1.png" alt="logo1">
                    <img class="h-[34px] mx-2" src="/image/bank2.png" alt="logo1">
                    <img class="h-[34px] mx-2" src="/image/bank3.png" alt="logo1">
                </div>
            </div>
            <div class="flex flex-row justify-between mt-[30px] bg-[#D9D9D9]">
                <h1 class="ml-[20px]  items-center flex text-[20px]">Debit Card</h1>
                <div class="flex flex-row items-center">
                    <img class="h-[70px] mx-2" src="/image/bank4.png" alt="logo1">
                    <img class="h-[70px] mx-2" src="/image/bank5.png" alt="logo1">
                    <img class="h-[34px] mx-2" src="/image/bank6.png" alt="logo1">
                </div>
            </div>
            <div class="flex flex-row justify-between mt-[30px] bg-[#D9D9D9]">
                <h1 class="ml-[20px] items-center p-3 flex text-[20px]">E-Wallet</h1>
                <div class="flex flex-row items-center">
                    <img class="h-[34px] mx-2" src="/image/bank7.png" alt="logo1">
                    <img class="h-[34px] mx-2" src="/image/bank8.png" alt="logo1">
                    <img class="h-[34px] mx-2" src="/image/bank9.png" alt="logo1">
                </div>
            </div>
        </div>
            <div class="flex flex-col w-full ml-[300px] -mt-[180px] justify-center items-center">
                <h1 class="text-[20px] tracking-[5px] text-[#595959]">Use Offers to get discounts</h1>
                <input type="text" class="border mt-[20px] w-[350px] bg-[#D9D9D9] placeholder:text-black placeholder:text-center p-3 rounded-xl text-white" placeholder="Promo or Gift Code">
                <a href="/history" class="bg-[#4FA095] text-white mt-[30px] px-[100px] rounded-lg py-2">PAY</a>
            </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/counter.js') }}"></script>
    @include('sweetalert::alert')
</body>
</html>