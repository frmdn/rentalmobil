<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;

class MobilController extends Controller
{
    public function show() 
    {
    	$data = Mobil::take(3)->get();
    	return view('public.index', compact('data'));
    }

    public function GetData()
    {
    	$data = Mobil::all();
    	return view('public.dashboard', compact('data'));
    }

    public function SaveData(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        $data = new Mobil;
        $data->nama_mobil = $request->input('nama_mobil');
        $data->merk_mobil = $request->input('merk_mobil');
        $data->kapasitas_mobil = $request->input('kapasitas_mobil');
        $data->kategori_mobil = $request->input('kategori_mobil');
        $data->plat_mobil = $request->input('plat_mobil');
        $data->tarif_mobil = $request->input('tarif_mobil');
        $data->status_mobil = "Ada";
        $data->gambar_mobil = $imageName;
        $data->save();
        
        request()->image->move(public_path('img'), $imageName);
        return redirect('admin');
    }
}
