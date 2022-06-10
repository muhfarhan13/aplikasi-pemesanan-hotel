@extends('layouts.tamu')

@section('content')

{{-- <h1 class="font-bold text-center uppercase text-2xl space-x-11 underline underline-offset-4">Kelas Kamar</h1> --}}
    <div class="mx-10 lg:mx-6 xl:mx-10 py-16 -mt-4">
        <div class="flex items-center mx-2 mbl:mx-4 sm:mx-1 md:px-60">
            <div class="flex-grow bg-black opacity-50 h-0.5"></div>
            <h1 class="text-3xl font-extrabold uppercase align-middle text-center px-2 mbl:px-4 md:px-8 opacity-80">Kamar</h1>
            <div class="flex-grow bg-black opacity-50 h-0.5"></div>
        </div>
        <div class="md:grid lg:grid-cols-3 md:grid-cols-2">
            @foreach($kamars as $kamar)
            <div class="card shadow-lg rounded-lg lg:mx-2 xl:mx-6 mt-10">
                <img src="{{ asset('storage/'.$kamar->gambar_kamar.'') }}">
                <div class="text-card px-6 py-4">
                    <h2 class="font-bold text-3xl mt-3">{{ $kamar->tipe }}</h2>
                    <h3 class="font-semibold text-2xl mt-2 opacity-70 mb-3">Rp{{ number_format($kamar->harga_kamar) }}</h3>
                    <h4 class="mt-1 opacity-70">Fitures</h4>
                    <ul class="my-4 list-outside">
                        @foreach($kamar->fasilitasKamar as $fasilitass)
                        <li><i class="fa-solid fa-check fill-current text-green-500"></i> {{ $fasilitass->fasilitas }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
