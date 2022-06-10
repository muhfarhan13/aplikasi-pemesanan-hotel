@if (auth()->user()->role == "admin")

@extends('layouts.admin')

@section('content')

    <div class="form card col-span-2 xl:col-span-1">
        <div class="card-header capitalize font-bold text-xl">Edit Kamar</div>
            <div class="w-full text-left px-6 py-10">
                <form action="{{ route('simpan-kamar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="tipe">
                        <label for="tipe" class="block mb-2 font-semibold">Tipe</label>
                        <input type="text" name="tipe" id="tipe" class="border-b-2 border-solid w-55 focus:outline-none p-2 rounded-sm" placeholder="Masukan tipe">
                    </div>
                    <div class="harga_kamar mt-5">
                        <label for="harga_kamar" class="block mb-2 font-semibold">Harga Kamar</label>
                        <input type="text" name="harga_kamar" id="harga_kamar" class="border-b-2 border-solid w-55 focus:outline-none p-2 rounded-sm" placeholder="Masukan jumlah kamar">
                    </div>
                    <div class="jumlah_kamar mt-5">
                        <label for="jumlah_kamar" class="block mb-2 font-semibold">Jumlah Kamar</label>
                        <input type="text" name="jumlah_kamar" id="jumlah_kamar"  class="border-b-2 border-solid w-55 focus:outline-none p-2 rounded-sm" placeholder="Masukan jumlah kamar">
                    </div>
                    <div class="gambar_kamar mt-5">
                        <label for="gambar_kamar" class="block mb-2 font-semibold">Gambar Kamar</label>
                        <input type="file" name="gambar_kamar" id="gambar_kamar" class="border-b-2 border-solid w-55 focus:outline-none p-2 rounded-sm">
                    </div>

                    <button type="submit" class="bg-blue-400 px-4 py-2 text-white mt-8">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection
        
@endif