@if (auth()->user()->role == "admin")

@extends('layouts.admin')

@section('content')

    <div class="form card col-span-2 xl:col-span-1">
        <div class="card-header capitalize font-bold text-xl">Tambah Fasilitas Kamar</div>
            <div class="w-full text-left px-6 py-10">
                <form action="{{ route('simpan-fasilitas-kamar') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="tipe">
                        <label for="tipe" class="block mb-2 font-semibold">Tipe</label>
                        <select name="tipe" id="tipe" class="w-56">
                            @foreach($kamars as $kamar)
                            <option value="{{ $kamar->id }}">{{ $kamar->tipe }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="fasilitas_kamar mt-5">
                        <label for="fasilitas_kamar" class="block mb-2 font-semibold">Fasilitas</label>
                        <input type="text" name="fasilitas_kamar" id="fasilitas_kamar" class="border-b-2 border-solid w-55 focus:outline-none p-2 rounded-sm" placeholder="Masukan nama fasilitas">
                    </div>

                    <button type="submit" class="bg-blue-400 px-4 py-2 text-white mt-8">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@endif