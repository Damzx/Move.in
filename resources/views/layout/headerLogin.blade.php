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
    <div class="bg-[#D6E4E5] fixed w-full top-0 z-50 shadow-2xl">
        <div class="py-2 flex w-full items-center">
            <div class="flex w-full justify-between mx-[50px]">
                <div class="flex flex-row items-center">
                    <a href="/dashboard">
                        <img class="h-[63px]" src="/image/Move 3.png" alt="Logo">
                    </a>
                    <ul class="flex flex-row items-center text-center">
                        <a href="/dashboard" class="pl-3 text-[20px] font-bold text-[#035397]">Move.In</a>
                        <form class="flex ml-[200px] items-center">   
                                <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative -ml-[100px]">
                                <div class="absolute inset-y-0 right-0 flex  items-center pr-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="simple-search" placeholder="Search" class="w-[370px] border border-gray-300 text-white text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-2 p-1">
                            </div>
                        </form>
                    </ul>
                </div>
                <div class="pt-2 items-center flex">
                    <a class="mr-14 cursor-pointer text-black" href="/dashboard">Home</a>
                    <a class="mr-14 cursor-pointer text-black" href="/history">Riwayat</a>
                    <a href="/profile" class="hover:bg-[#42877e] px-[40px] py-2 text-black font-bold rounded-full bg-[#4FA095]">Profile</a>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="hover:bg-[#42877e] px-[40px] ml-5 py-2 text-black font-bold rounded-full bg-[#4FA095]">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>