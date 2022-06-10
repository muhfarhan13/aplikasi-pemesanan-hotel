<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\FasilitasUmum;
use App\Models\Reservasi;
use App\Models\User;
use Carbon\Carbon;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->check()) {
            $this->middleware('auth');
            if (auth()->user()->role == "tamu") {
                $kamars = Kamar::get();
                $user = User::where('id', Auth::user()->id)->first();
                return view('tamu.home', compact('kamars', 'user'));
            } elseif (auth()->user()->role == "admin") {
                $jumlahTipe = Kamar::count();
                $jumlahFasilitasUmum = FasilitasUmum::count();
                $jumlahKamar = Kamar::sum('jumlah_kamar');
                $totalKamar = Kamar::sum('jumlah_kamar') + Reservasi::sum('jumlah_kamar');
                $jumlahKamarDipakai = Reservasi::sum('jumlah_kamar');
                return view('admin.index', compact('jumlahTipe', 'jumlahFasilitasUmum', 'jumlahKamar', 'jumlahKamarDipakai', 'totalKamar'));
            } elseif (auth()->user()->role == "resepsionis") {
                $jumlahReservasi = Reservasi::all()->count();
                $reservasis = Reservasi::whereDate('created_at', Carbon::today())->paginate(5);
                return view('resepsionis.dashboard', compact('jumlahReservasi', 'reservasis'));
            }
        } else {
            $kamars = Kamar::get();
            return view('tamu.home', compact('kamars'));
        }
    }
}
