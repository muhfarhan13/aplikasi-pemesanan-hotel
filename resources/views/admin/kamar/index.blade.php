@if (auth()->user()->role == "admin")

@extends('layouts.admin')

@section('content')

    <div class="card col-span-2 xl:col-span-1">
        <div class="card-header flex justify-between items-center">
            <label class="font-bold text-xl">Kamar</label>
            <a href="{{ route('tambah-kamar') }}" class="bg-blue-400 px-4 py-2 text-white rounded-full"><li class="fad fa-plus"></li> Add</a>
        </div>
            
        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r text-center">No</th>
                    <th class="px-4 py-2 border-r">Tipe</th>
                    <th class="px-4 py-2 border-r">Harga Kamar</th>
                    <th class="px-4 py-2 border-r">Jumlah Kamar</th>
                    <th class="px-4 py-2 border-r">Gambar Kamar</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach($kamars as $kamar)
                <tr>                    
                    <td class="border border-l-0 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                    <td class="border border-l-0 px-4 py-2">{{ $kamar->tipe }}</td>
                    <td class="border border-l-0 px-4 py-2">Rp{{ number_format($kamar->harga_kamar) }}</td>
                    <td class="border border-l-0 px-4 py-2">{{ $kamar->jumlah_kamar }}</td>
                    <td class="border border-l-0 px-4 py-2 w-40"><img src="{{ asset('storage/'.$kamar->gambar_kamar.'') }}"></td>
                    <td class="border border-l-0 px-4 py-2">
                        <div class="button-group flex">
                            <a href="/edit-kamar/{{ $kamar->id }}" class="px-3 py-1 bg-green-400 text-white">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/hapus-kamar/{{ $kamar->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="sumbit" onclick="return confirm('Yakin hapus data ? ');" class="px-3 py-1 bg-red-500 text-white"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
        
@endif