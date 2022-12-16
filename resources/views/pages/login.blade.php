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
    <div class="flex flex-row">
        <img class="h-screen" src="/image/delivery.png" alt="">
        <form action="/login" method="POST">
            @csrf
            <div class="flex px-[80px] pt-[200px] flex-col">
                <h1 class="font-bold text-[24px]">Login</h1>
                <div class="flex flex-row">
                    <div class="flex flex-col mt-7 font-Open Sans">
                        <input type="text" name="username" class="w-[500px] border rounded-xl bg-[#D6E4E5] mt-5 p-3 placeholder:-pl-[600px] placeholder:text-[black]" placeholder="Username">
                        <input type="password" name="password" class="w-[500px] border rounded-xl bg-[#D6E4E5] mt-7 p-3 placeholder:-pl-[600px] placeholder:text-[black]" placeholder="Password">
                    </div>
                </div>
                <button type="submit" class="bg-[#4FA095] mt-[50px] mb-3 text-white p-3 rounded-xl ">LOGIN</button>
            </div>
        </form>
    </div>
</body>
</html>