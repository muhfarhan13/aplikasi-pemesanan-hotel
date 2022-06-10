<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use Alert;

class KamarController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $this->middleware('auth');
            if (auth()->user()->role == "tamu") {
                $kamars = Kamar::get();
                return view('tamu.kamar', compact('kamars'));
            } elseif (auth()->user()->role == "admin") {
                $kamars = Kamar::get();
                return view('admin.kamar.index', compact('kamars'));
            }
        } else {
            $kamars = Kamar::get();
            return view('tamu.kamar', compact('kamars'));
        }
    }

    public function create()
    {
        return view('admin.kamar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe' => 'required',
            'harga_kamar' => 'required',
            'jumlah_kamar' => 'required',
            'gambar_kamar' => 'required|mimes:jpg,jpeg,png'
        ]);

        $file_name = $request->gambar_kamar->getClientOriginalName();
        $image = $request->gambar_kamar->storeAs('kamar', $file_name);

        Kamar::create([
            'tipe' => $request->tipe,
            'harga_kamar' => $request->harga_kamar,
            'jumlah_kamar' => $request->jumlah_kamar,
            'gambar_kamar' => $image
        ]);

        Alert::success('Success', 'Youve Successfully add data!');

        return redirect()->route('kamar');
    }

    public function edit($id)
    {
        $kamar = Kamar::where('id', $id)->first();
        return view('admin.kamar.edit', compact('kamar'));
    }

    public function update(Request $request, $id)
    {
        $file_name = $request->gambar_kamar->getClientOriginalName();
        $image = $request->gambar_kamar->storeAs('kamar', $file_name);

        // //jika edit data kamar tidak ada nilai
        // $image_none = $request->gambar_kamar;
        // $image_name = $request->hidden_image;

        // if($image != '')
        // {
        //     $image_name = rand().'.'.$image_none->getClientOriginalExtension();
        //     $image_none->move(public_path('storage/kamar'), $image);
        // }

        Kamar::where('id', $id)->update([
            'tipe' => $request['tipe'],
            'harga_kamar' => $request['harga_kamar'],
            'jumlah_kamar' => $request['jumlah_kamar'], 
            'gambar_kamar' => $image,
        ]);

        Alert::success('Success', 'Youve Successfully edit data!');

        return redirect()->route('kamar');
    }

    public function destroy($id)
    {
        Kamar::destroy($id);

        Alert::confirm('Warning', 'Youve Successfully edit account!');

        return redirect()->route('kamar');
    }
}
