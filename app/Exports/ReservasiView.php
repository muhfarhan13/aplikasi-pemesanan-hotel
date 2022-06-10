<?php

namespace App\Exports;


use App\Models\Reservasi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ReservasiView implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function view(): View
    {
        return view('resepsionis.table', [
            'reservasis' => Reservasi::get()
        ]);
    }
}
