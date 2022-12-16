<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jasa;
Use Alert;

class JasaController extends Controller
{
    public function movein(){
        $user = auth()->user();

        return view('feature.bookMovin', [
            'user' => $user
        ]);
    }

    public function packin(){
        $user = auth()->user();

        return view('feature.bookPackin', [
            'user' => $user
        ]);
    }

    public function checkout(){
        $user = auth()->user();

        return view('feature.validatePayment', [
            'user' => $user
        ]);
    }

    public function paymentMovein(){
        $user = auth()->user();

        return view('feature.paymentMovein', [
            'user' => $user
        ]);
    }

    public function paymentPackin(){
        $user = auth()->user();

        return view('feature.paymentPackin', [
            'user' => $user
        ]);
    }

    public function edit($id){
        $user = auth()->user();

        $jasa = Jasa::where('id', $id)->first();

        return view('feature.editPesanan', [
            'user' => $user,
            'jasa' => $jasa,
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'id' => 'required',
            'quantity' => 'required',
            'total' => 'required',
            'date' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Jasa::where('id', $request->id)->update($validatedData);

        return redirect('/history')->with('success', 'Pesanan udah di update nih!!!');
    }

    public function delete(Request $request)
    {
        Jasa::where('id', $request->id)->delete();
     
        return redirect('/history')->with('message', 'Pesanan berhasil dihapus!');
    }

    public function store(Request $request){
        $user = auth()->user();

        $validatedData = $request->validate([
            'date' => 'required',
            'total' => 'required',
            'quantity' => 'required',
            'jenis' => 'required',
        ]);

        $validatedData['user_id'] = $user->id;

        Jasa::create($validatedData);

        return redirect('/checkout');
    }

    public function history(){
        $user = auth()->user();
        $histories = Jasa::where('user_id', $user->id)->get();;

        return view('pages.riwayat', [
            'user' => $user,
            'histories' => $histories
        ]);
    }
}
