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
            <form action="/profile/edit" method="post">
            <div class="flex flex-row mt-[50px] justify-center">
                    @csrf
                    @method('put')
                    <div class="flex flex-col font-Open Sans">
                        <input type="text" value="{{ $user->fullname }}" name="fullname" class="w-[600px] placeholder:text-black border rounded-md bg-[#D6E4E5] mt-2 p-3 placeholder:-pl-[600px]" placeholder="Full Name">
                        <input type="text" value="{{ $user->username }}"  name="username" class="w-[600px] border placeholder:text-black  rounded-md bg-[#D6E4E5] mt-5 p-3 placeholder:-pl-[600px]" placeholder="Username">
                        <input type="number" name="phone" value="{{ $user->phone }}"  class="w-[600px] placeholder:text-black  border rounded-md bg-[#D6E4E5] mt-5 p-3 placeholder:-pl-[600px]" placeholder="Phone Number">
                        <input type="text" name="address" value="{{ $user->address }}"  class="w-[600px] placeholder:text-black  border rounded-md bg-[#D6E4E5] mt-5 p-3 placeholder:-pl-[600px]" placeholder="Address">
                    </div>
                    <div class="flex flex-col ml-[100px] font-Open Sans">
                        <input type="date" value="{{ $user->birth_date }}"  name="birth_date" class="w-[600px] placeholder:text-black  border rounded-md mt-2 bg-[#D6E4E5] p-3 placeholder:-pl-[600px]" placeholder="Birth Date dd/mm/yy">
                        <input type="password" name="password" class="w-[600px] placeholder:text-black  border rounded-md bg-[#D6E4E5] mt-5 p-3 placeholder:-pl-[600px] @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                        <div class="invalid-feedback text-red-500">
                          {{ $message }}
                        </div>
                        @enderror
                        <input type="password" name="confirm_password" class="w-[600px] placeholder:text-black  border rounded-md bg-[#D6E4E5] mt-5 p-3 placeholder:-pl-[600px]" placeholder="Confirm Password">
                        <button type="submit" class="text-center bg-[#4FA095] rounded-lg mt-5 p-3 text-white font-bold" >SAVE</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>