@if (auth()->user()->role == "resepsionis")

@extends('layouts.resepsionis')

@section('content')

    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-400 fad fa-bed"></div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">{{ $jumlahReservasi }}</h1>
                        <p>Data Reservasi</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
    </div>
    <div class="content mt-8">
        <div class="card col-span-2 xl:col-span-1">
            <div class="head">
                <div class="card-header text-center">
                    <label class="font-bold text-xl uppercase underline underline-offset-8">Reservasi hari ini</label>
                </div>
            </div>
            <table class="bg-white table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r text-center">No</th>
                        <th class="px-4 py-2 border-r">Tipe Kamar</th>
                        <th class="px-4 py-2 border-r">Nama Pemesan</th>
                        <th class="px-4 py-2 border-r">Nama Tamu</th>
                        <th class="px-4 py-2 border-r">Jumlah Kamar</th>
                        <th class="px-4 py-2 border-r">Email</th>
                        <th class="px-4 py-2 border-r">No Handphone</th>
                        <th class="px-4 py-2 border-r">Check In</th>
                        <th class="px-4 py-2 border-r">Check Out</th>
                        {{-- <th class="px-4 py-2 border-r">Status</th> --}}
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach($reservasis as $reservasi)
                    <tr>
                        <td class="border border-l-0 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-l-0 px-4 py-2">{{ $reservasi->kamar->tipe }}</td>
                        <td class="border border-l-0 px-4 py-2">{{ $reservasi->nama_pemesan }}</td>
                        <td class="border border-l-0 px-4 py-2">{{ $reservasi->nama_tamu }}</td>
                        <td class="border border-l-0 px-4 py-2">{{ $reservasi->jumlah_kamar }}</td>
                        <td class="border border-l-0 px-4 py-2">{{ $reservasi->email }}</td>
                        <td class="border border-l-0 px-4 py-2">{{ $reservasi->no_handphone }}</td>
                        <td class="border border-l-0 px-4 py-2">{{ $reservasi->tanggal_checkin }}</td>
                        <td class="border border-l-0 px-4 py-2">{{ $reservasi->tanggal_checkout }}</td>
                        {{-- <td class="border border-l-0 px-4 py-2">
                            <a href="/status-reservasi/{{ $reservasi->id }}" class="{{ $reservasi->status == 'checkin' ? 'bg-green-400 text-white' : 'bg-gray-500 text-white' }} px-3 py-1">{{ $reservasi->status }}</a>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <ul class="paginate flex items-center mb-4 p-0">
                {{ $reservasis->links('pagination::tailwind') }}
            </ul>
        </div>
    </div>


@endsection

@endif