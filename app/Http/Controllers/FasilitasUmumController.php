<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasUmum;
use Alert;

class FasilitasUmumController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $this->middleware('auth');
            if (auth()->user()->role == 'tamu') {
                $fasilitass = FasilitasUmum::get();
                return view('tamu.fasilitas', compact('fasilitass'));
            } elseif (auth()->user()->role == 'admin') {
                $fasilitass = FasilitasUmum::paginate(2);
                return view('admin.fasilitas_umum.index', compact('fasilitass'));
            }
        } else {
            $fasilitass = FasilitasUmum::get();
            return view('tamu.fasilitas', compact('fasilitass'));
        }
    }

    public function create()
    {
        return view('admin.fasilitas_umum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fasilitas_umum' => 'required',
            'keterangan' => 'required',
            'gambar_fasilitas' => 'required|mimes:jpg,jpeg,png'
        ]);

        $file_name = $request->gambar_fasilitas->getClientOriginalName();
        $image = $request->gambar_fasilitas->storeAs('fasilitasumum', $file_name);

        FasilitasUmum::create([
            'fasilitas_umum' => $request->fasilitas_umum,
            'keterangan' => $request->keterangan,
            'gambar_fasilitas' => $image
        ]);

        Alert::success('Success', 'Youve Successfully add data!');

        return redirect()->route('fasilitas-umum');
    }

    public function edit($id)
    {
        $fasilitas = FasilitasUmum::where('id', $id)->first();
        return view('admin.fasilitas_umum.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $file_name = $request->gambar_fasilitas->getClientOriginalName();
        $image = $request->gambar_fasilitas->storeAs('fasilitasumum', $file_name);

        FasilitasUmum::where('id', $id)->update([
            'fasilitas_umum' => $request['fasilitas_umum'],
            'keterangan' => $request['keterangan'],
            'gambar_fasilitas' => $image
        ]);

        Alert::success('Success', 'Youve Successfully edit data!');

        return redirect()->route('fasilitas-umum');
    }

    public function destroy($id)
    {
        FasilitasUmum::destroy($id);

        Alert::warning('Warning', 'Youve Successfully edit account!');

        return redirect()->route('fasilitas-umum');
    }
}
