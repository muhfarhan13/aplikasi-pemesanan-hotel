<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasKamar;
use App\Models\Kamar;
use Alert;

class FasilitasKamarController extends Controller
{
    public function index()
    {
        $fasilitass = FasilitasKamar::latest()->paginate(5);
        return view('admin.fasilitas_kamar.index', compact('fasilitass'));
    }

    public function create()
    {
        $kamars = Kamar::get();
        return view('admin.fasilitas_kamar.create', compact('kamars'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'tipe' => 'required',
            'fasilitas_kamar' => 'required'
        ]);

        FasilitasKamar::create([
            'kamar_id' => $request->tipe,
            'fasilitas' => $request->fasilitas_kamar
        ]);

        Alert::success('Success', 'Youve Successfully add data!');
        
        return redirect()->route('fasilitas-kamar');
    }
    
    public function edit($id)
    {
        $fasilitas = FasilitasKamar::where('id', $id)->first();
        $kamars = Kamar::get();
        return view('admin.fasilitas_kamar.edit', compact('fasilitas', 'kamars'));
    }
    
    public function update(Request $request, $id)
    {
        FasilitasKamar::where('id', $id)->update([
            'kamar_id' => $request['tipe'],
            'fasilitas' => $request['fasilitas_kamar']
        ]);

        Alert::success('Success', 'Youve Successfully edit data!');

        return redirect()->route('fasilitas-kamar');
    }

    public function destroy($id)
    {
        FasilitasKamar::destroy($id);

        Alert::warning('Warning', 'Youve Successfully edit account!');

        return redirect()->route('fasilitas-kamar');
    }
}
