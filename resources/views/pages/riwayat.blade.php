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
    <div class=" ml-[60px] flex-col">
        <h1 class="mt-[120px] text-[24px] font-bold">Pesanan</h1>
    </div>
    <div class="flex flex-row mt-[50px] justify-around p-5 bg-[#D6E4E5] ">
        <h1 class="font-bold text-[20px]">Selesai</h1>
    </div>
        <div class="grid grid-cols-3 w-full p-5 mt-[20px]  mb-[50px]">
        @foreach ($histories as $history)
                <div class="px-7 h-[350px] text-white p-5 items-center mx-5 mt-[50px] w-[400px] font-semibold text-[20px] rounded-2xl bg-[#D6E4E5]">
                    <h1 class="w-[350px]  bg-[#9F9F9F] rounded-2xl py-2 px-5">Tanggal pesan : {{$history->date}}</h1>
                    <h3 class="mt-[20px] bg-[#9F9F9F] rounded-2xl py-2 px-5 w-[350px]">Quantitiy : {{$history->quantity}}</h3>
                    <h3 class="mt-[20px] bg-[#9F9F9F] rounded-2xl px-5 py-2 w-[350px]">Total : Rp. {{$history->total}}</h3>
                    <h3 class="mt-[20px] bg-[#9F9F9F] rounded-2xl px-5 py-2 w-[350px]">Jenis : {{$history->jenis}}</h3>
                    <form action="/book/delete" class="flex justify-around mt-[30px]" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{ $history->id }}" />
                        <button type="submit" class="bg-red-500 p-2 rounded-xl">Delete</button>
                        <a href="/book/edit/{{ $history->id }}" class="bg-blue-500 p-2 px-5 rounded-xl">Edit</a>
                    </form>
                </div>
        @endforeach

</body>
</html>