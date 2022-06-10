@if (auth()->user()->role == "admin")

@extends('layouts.admin')

@section('content')

    <div class="form card col-span-2 xl:col-span-1">
        <div class="card-header capitalize font-bold text-xl">Edit Kamar</div>
            <div class="w-full text-left px-6 py-10">
                <form action="/update-fasilitas-kamar/{{ $fasilitas->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="tipe">
                        <label for="tipe" class="block mb-2 font-semibold">tipe</label>
                        <select name="tipe" id="tipe" class="w-56">
                            @foreach($kamars as $kamar)
                            <option value="{{ $kamar->id }}">{{ $kamar->tipe }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" name="tipe" id="tipe" value="{{ old('tipe', $fasilitas->kamar->tipe) }}" class="border-b-2 border-solid w-55 focus:outline-none p-2 rounded-sm"> --}}
                    </div>
                    <div class="fasilitas mt-10">
                        <label for="fasilitas" class="block mb-2 font-semibold">Fasilitas</label>
                        <input type="text" name="fasilitas_kamar" id="fasilitas" value="{{ old('fasilitas_kamar', $fasilitas->fasilitas) }}" class="border-b-2 border-solid w-55 focus:outline-none p-2 rounded-sm">
                    </div>

                    <button type="submit" class="bg-blue-400 px-4 py-2 text-white mt-8">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection
        
@endif