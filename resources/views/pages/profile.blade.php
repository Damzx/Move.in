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
        <div class="flex flex-col justify-center w-full mt-[200px]">
            <h1 class="font-bold text-[25px] mx-[120px]">Profile</h1>
            <form action="" method>
            <div class="flex flex-row mt-[50px] justify-center">
                    @csrf
                    <div class="flex flex-col font-Open Sans">
                        <input disabled value="{{ $user->fullname }}" type="text" name="fullname" class="w-[600px] placeholder:text-black border rounded-md bg-[#D6E4E5] mt-2 p-3 placeholder:-pl-[600px]" placeholder="Full Name">
                        <input disabled value="{{ $user->username }}" type="text" name="username" class="w-[600px] border placeholder:text-black  rounded-md bg-[#D6E4E5] mt-5 p-3 placeholder:-pl-[600px]" placeholder="Username">
                        <input disabled value="{{ $user->phone }}" type="number" name="phone" class="w-[600px] placeholder:text-black  border rounded-md bg-[#D6E4E5] mt-5 p-3 placeholder:-pl-[600px]" placeholder="Phone Number">
                    </div>
                    <div class="flex flex-col ml-[100px] font-Open Sans">
                        <input disabled value="{{ $user->address }}" type="text" name="adress" class="w-[600px] placeholder:text-black  border rounded-md bg-[#D6E4E5] mt-2 p-3 placeholder:-pl-[600px]" placeholder="Address">
                        <input disabled value="{{ $user->birth_date }}" type="date" name="birth_date" class="w-[600px] placeholder:text-black  border rounded-md mt-5 bg-[#D6E4E5] p-3 placeholder:-pl-[600px]" placeholder="Birth Date dd/mm/yy">
                        <input disabled type="password" value="{{$user->password}}" name="password" class="w-[600px] placeholder:text-black  border rounded-md bg-[#D6E4E5] mt-5 p-3 placeholder:-pl-[600px]" placeholder="Password">
                        <a href="/profile/edit" class="text-center bg-[#4FA095] rounded-lg mt-[50px] p-3 text-white font-bold" >EDIT PROFILE</a>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>