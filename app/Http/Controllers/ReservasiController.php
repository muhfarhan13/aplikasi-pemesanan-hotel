<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\User;
use App\Models\Kamar;
use App\Models\FasilitasKamar;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReservasiView;
use Carbon\Carbon;
use Auth;
use PDF;

class ReservasiController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'resepsionis') {
            $reservasis = Reservasi::latest()->paginate(5);
            return view('resepsionis.reservasi', compact('reservasis'));
        } elseif (auth()->user()->role == 'tamu') {
            $currentTime = strtotime(date("Y-m-d"));
            $email = Auth::user()->email;
            $reservasis = Reservasi::where('email', $email)->latest()->paginate(5);
            return view('tamu.reservasi', compact('reservasis', 'currentTime'));
            // dd($user_id);
        }
    }

    public function filter_checkin(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $quey = $request->get('quey');
            if ($quey != '') {
                $tanggal = date('Y-m-d',strtotime($request->quey));
                $reservasis = Reservasi::whereDate('tanggal_checkin',$tanggal)->paginate(5);
            } else {
                $reservasis = Reservasi::latest()->paginate(5);
            }

            $total_row = $reservasis->count();
            $no = 1;
            if ($total_row > 0) {
                foreach ($reservasis as $reservasi) {
                    $output .= '
                    <tr>                    
                        <td class="border border-l-0 px-4 py-2 text-center">' . $no++ . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->kamar->tipe . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->nama_pemesan . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->nama_tamu . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->jumlah_kamar . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->email . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->no_handphone . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->tanggal_checkin . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->tanggal_checkout . '</td>
                        <td class="border border-l-0 px-4 py-2">
                            <a href="/status-reservasi/'.$reservasi->id.'" class="border border-1 border-black rounded-full px-2 py-1">'. $reservasi->status . '</a>
                        </td>
                    </tr>';
                }
            } else {
                $output = '
                    <tr>
                        <td class="text-center py-5" colspan="7">Di tanggal ini tak ada aksi reservasi</td>
                    </tr>';
            }

            $reservasis = array(
                'table_reservasi' => $output,
            );

            echo json_encode($reservasis);
        }
    }

    public function cari(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $reservasis = Reservasi::where('id', 'LIKE', '%' . $query . '%')
                    ->orwhere('nama_tamu', 'LIKE', '%' . $query . '%')
                    ->orderBy('id', 'asc')->paginate(5);
            } else {
                $reservasis = Reservasi::orderBy('id', 'asc')->paginate(5);
            }
            $total_row = $reservasis->count();
            $no = 1;
            if ($total_row > 0) {
                foreach ($reservasis as $reservasi) {
                    $output .= '
                    <tr>                    
                        <td class="border border-l-0 px-4 py-2 text-center">' . $no++ . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->kamar->tipe . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->nama_pemesan . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->nama_tamu . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->jumlah_kamar . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->email . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->no_handphone . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->tanggal_checkin . '</td>
                        <td class="border border-l-0 px-4 py-2">' . $reservasi->tanggal_checkout . '</td>
                        <td class="border border-l-0 px-4 py-2">
                            <a href="/status-reservasi/'.$reservasi->id.'" class="border border-1 border-black rounded-full px-2 py-1">'. $reservasi->status . '</a>
                        </td>
                    </tr>';
                }
            } else {
                $output = '
                    <tr>
                        <td class="text-center py-5" colspan="7">Tamu yg Anda cari tidak ada</td>
                    </tr>';
            }

            $reservasis = array(
                'table_data' => $output,
            );

            echo json_encode($reservasis);
        }
    }

    public function cetak_reservasi($id)
    {
        $reservasi = Reservasi::where('id', $id)->first();
        $fasilitass = FasilitasKamar::where('kamar_id', $reservasi->kamar_id)->get();
        $pdf = PDF::loadView('tamu.bukti_reservasi', compact('reservasi', 'fasilitass'));
        $pdf->setPaper('A5', 'landscape');
        
        return $pdf->download(''.$reservasi->nama_pemesan.'-checkin-'.$reservasi->tanggal_checkin.'.pdf');

        // return view('tamu.bukti_reservasi');
    }

    public function export_excel_reservasi()
    {
        return Excel::download(new ReservasiView(), 'data_reservasi.xlsx');
    }

    public function status_reservasi($id)
    {
        $reservasi = Reservasi::where('id', $id)->first();
        $kamar = Kamar::where('id', $reservasi->id)->first();

        $status_now = $reservasi->status;

        if($status_now == "checkin"){
            Reservasi::where('id', $id)->update([
                'status' => "checkout",
            ]);

            Kamar::where('id', $reservasi->id)->update([
                'jumlah_kamar' => $reservasi->jumlah_kamar + $kamar->jumlah_kamar
            ]);
        } else {
            Reservasi::where('id', $id)->update([
                'status' => "checkin"
            ]);

            Kamar::where('id', $reservasi->id)->update([
                'jumlah_kamar' => $kamar->jumlah_kamar - $reservasi->jumlah_kamar
            ]);
        }

        return redirect()->route('reservasi');
    }
}
