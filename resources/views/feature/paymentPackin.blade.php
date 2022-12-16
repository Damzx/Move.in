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
    <div class="flex flex-col cursor-pointer mx-20 mt-[50px]">
        <div class="flex flex-row items-center">
            <x-heroicon-o-chevron-left  class="h-[20px]"/>
            <a href="/book/packin" class="text-[26px] font-bold tracking-[5px] ml-5">back</a>
        </div>
        <form action="/checkout" method="post">
            @csrf
            <div class="flex flex-row justify-between mt-[50px]">
                <div class="flex flex-col">
                    <h1 class="text-[16px] font-bold">Select Date</h1>
                    <h1 class="text-[20px] mt-[50px] text-[#035397] font-bold tracking-[10px] justify-center flex ">BOOK PACKIN</h1>
                    <input type="hidden" name="jenis" value="Packin">
                    <input type="date" name="date" class="border-2 shadow-lg w-[500px] p-10 mt-[20px] rounded-xl">
                </div>
                <div class="flex-col flex">
                    <div class="bg-[#D6E4E5] p-5 flex justify-between w-[400px] rounded-xl mt-[100px]">
                        <h1>Quantity : </h1>
                        <div>
                            <button type="button" onclick="decrease()"   class="btn decrease border-2 px-[5px] text-[12px] font-bold rounded-sm border-black">-</button>
                            <input type="number" id="counter" value="0" name="quantity" class="bg-[#D6E4E5] border-2 w-[50px] mx-[50px] border-black text-center">
                            <button type="button" onclick="increase()" class="btn increase border-2 px-[5px] text-[12px] font-bold rounded-sm border-black ">+</button>
                        </div>
                    </div>
                    <div class="bg-[#D6E4E5] font-bold p-5 flex justify-between w-[400px] rounded-xl mt-[20px]">
                        <h1>Total Payment</h1>
                        <div>
                            <span>Rp. </span>
                            <input type="text" name="total" value="0" id="total" class="bg-[#D6E4E5] placeholder:text-black"></input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-[100px]">
                <button type="submit" class="p-3 text-[16px] justify-center flex w-[150px] text-sm font-semibold text-white bg-[#4FA095] rounded-lg">BOOK NOW</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/counter.js') }}"></script>
</body>
</html>