@if (auth()->user()->role == "admin")

@extends('layouts.admin')

@section('content')

    <div class="form card col-span-2 xl:col-span-1">
        <div class="card-header capitalize font-bold text-xl">Edit Fasilitas umum</div>
            <div class="w-full text-left px-6 py-10">
                <form action="/update-fasilitas-umum/{{ $fasilitas->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="fasilitas_umum">
                        <label for="fasilitas_umum" class="block mb-2 font-semibold">Fasilitas Umum</label>
                        <input type="text" name="fasilitas_umum" id="fasilitas_umum" value="{{ old('fasilitas_umum', $fasilitas->fasilitas_umum) }}" class="border-b-2 border-solid w-64 focus:outline-none py-2 rounded-sm">
                    </div>
                    <div class="keterangan mt-5">
                        <label for="keterangan" class="block mb-2 font-semibold">Keterangan</label>
                        <textarea name="keterangan" id="keterangan" class="border-b-2 border-solid w-64 focus:outline-none py-2 rounded-sm">{{ old('keterangan', $fasilitas->keterangan) }}</textarea>
                    </div>
                    <div class="gambar_fasilitas mt-5">
                        <label for="gambar_fasilitas" class="block mb-2 font-semibold">Gambar Fasilitas</label>
                        <input type="file" name="gambar_fasilitas" id="gambar_fasilitas" value="{{ old('gambar_fasilitas', $fasilitas->gambar_fasilitas) }}" class="border-b-2 border-solid w-64 focus:outline-none py-2 rounded-sm">
                    </div>

                    <button type="submit" class="bg-blue-400 px-4 py-2 text-white mt-8">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@endif