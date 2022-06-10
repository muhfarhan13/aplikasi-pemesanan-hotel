@if (auth()->user()->role == "admin")

@extends('layouts.admin')

@section('content')

    <div class="card col-span-2 xl:col-span-1">
        <div class="card-header flex justify-between items-center">
            <label class="font-bold text-xl capitalize">Fasilitas kamar</label>
            <a href="{{ route('tambah-fasilitas-kamar') }}" class="bg-blue-400 px-4 py-2 text-white rounded-full"><li class="fad fa-plus"></li> Add</a>
        </div>

        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r text-center">No</th>
                    <th class="px-4 py-2 border-r">Tipe Kamar</th>
                    <th class="px-4 py-2 border-r">Fasilitas Kamar</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach($fasilitass as $fasilitas)
                <tr>                    
                    <td class="border border-l-0 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                    <td class="border border-l-0 px-4 py-2">{{ $fasilitas->kamar->tipe }}</td>
                    <td class="border border-l-0 px-4 py-2">{{ $fasilitas->fasilitas }}</td>
                    <td class="border border-l-0 px-4 py-2">
                        <div class="button-group flex">
                            <a href="/edit-fasilitas-kamar/{{ $fasilitas->id }}" class="px-3 py-1 bg-green-400 text-white">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/hapus-fasilitas-kamar/{{ $fasilitas->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="sumbit" class="px-3 py-1 bg-red-500 text-white"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <ul class="paginate flex items-center mb-4 p-0">
            {{ $fasilitass->links('pagination::tailwind') }}
        </ul>
    </div>
    

@endsection
        
@endif