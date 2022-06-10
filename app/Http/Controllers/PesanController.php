<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\User;
use App\Models\Kamar;
use App\Models\FasilitasKamar;
use Auth;
use Alert;
use PDF;

class PesanController extends Controller
{
    public function pesan_kamar(Request $request)
    {
        $request->validate([
            'kamar' => 'required',
            'n_pemesan' => 'required',
            'n_tamu' => 'required',
            'email' => 'required',
            'no_handphone' => 'required',
            'k_jkamar' => 'required',
            'checkin' => 'required',
            'checkout' => 'required'
        ]);
        
        $kamar = Kamar::where('id', $request->kamar)->first();
        if($request->k_jkamar > $kamar->jumlah_kamar){
            Alert::Warning('Warning', 'Jumlah pesan kamar kamu harus kurang dari jumlah tipe kamar yg dipesan');
        } else {
            Reservasi::create([
                'kamar_id' => $request->kamar,
                'nama_pemesan' => $request->n_pemesan,
                'nama_tamu' => $request->n_tamu,
                'email' => $request->email,
                'no_handphone' => $request->no_handphone,
                'jumlah_kamar' => $request->k_jkamar,
                'total_harga' => $kamar->harga_kamar * $request->k_jkamar,
                'tanggal_checkin' => $request->checkin,
                'tanggal_checkout' => $request->checkout,
            ]);
            
            Kamar::where('id', $request->kamar)->update([
                'jumlah_kamar' =>  $kamar->jumlah_kamar - $request->k_jkamar
            ]);

            Alert::success('Success', 'Pergi ke menu reservasi dan cetak bukti reservasi anda untuk diberkan ke resepsionis');
        }

        return redirect()->route('home');
        
    }

    // public function cetak_reservasi($id)
    // {
    //     // set_time_limit(30);  
    //     $reservasi = Reservasi::where('id', $id)->first();
    //     $fasilitass = FasilitasKamar::where('kamar_id', $reservasi->kamar_id)->get();
    //     $pdf = PDF::loadView('tamu.bukti_reservasi', compact('reservasi', 'fasilitass'));
    //     $pdf->setPaper('A4', 'potrait');
    //     return $pdf->stream();
    //     // $name = Auth::user()->name;
    // }
    
}
