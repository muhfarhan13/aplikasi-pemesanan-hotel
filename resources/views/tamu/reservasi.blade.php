@extends('layouts.tamu')

@section('content')

    <div class="flex px-8 xl:px-0 flex-col justify-center mb-44 mt-20">
        <div class="w-full max-w-7xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800 xl:text-3xl uppercase">Reservasi</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-sm font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nama pemesan</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nama tamu</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Email</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">no handphone</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Tipe kamar</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">jumlah kamar</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">total harga</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">checkin</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">checkout</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">action</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @foreach($reservasis as $reservasi)
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="font-medium text-gray-800">{{ $reservasi->nama_pemesan }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{ $reservasi->nama_tamu }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-yellow-400">{{ $reservasi->email }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{ $reservasi->no_handphone }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{ $reservasi->kamar->tipe }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{ $reservasi->jumlah_kamar }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Rp{{ number_format($reservasi->total_harga) }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{ $reservasi->tanggal_checkin }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{ $reservasi->tanggal_checkout }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">
                                        @if($currentTime < strtotime($reservasi->tanggal_checkin))  
                                        <a href="/cetak-bukti-reservasi/{{ $reservasi->id }}" class="uppercase px-4 py-1 bg-yellow-400 font-bold text-white" target="_blank">Cetak</a>
                                        @else
                                        <a class="uppercase font-bold py-1">Expired</a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <ul class="paginate flex items-center mb-4 p-0">
                {{ $reservasis->links('pagination::tailwind') }}
            </ul>
        </div>
    </div>

@endsection