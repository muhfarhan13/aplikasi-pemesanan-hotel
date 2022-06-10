@if (auth()->user()->role == "resepsionis")

@extends('layouts.resepsionis')

@section('content')

    <div class="content">
        <div class="reservasi-resepsionis card col-span-2 xl:col-span-1">
            <div class="head">
                <div class="card-header flex justify-between items-center">
                    <label class="font-bold text-xl">Reservasi</label>
                    <input type="search" id="search" name="search" class="focus:outline-none border-b-2" placeholder="Cari dengan nama tamu">
                    <a href="/export-reservasi" class="px-4 py-1 text-white bg-green-500">EXPORT</a>
                </div>
            </div>
            <table class="tableReservasi table-auto w-full text-left">
                @include('resepsionis.table')
            </table>
            <ul class="paginate flex items-center mb-4 p-0">
                {{ $reservasis->links('pagination::tailwind') }}
            </ul>
        </div>
    </div>

@endsection
        
@endif