<thead>
    <tr>
        <th class="px-4 py-2 border-r text-center">No</th>
        <th class="px-4 py-2 border-r">Tipe Kamar</th>
        <th class="px-4 py-2 border-r">Nama Pemesan</th>
        <th class="px-4 py-2 border-r">Nama Tamu</th>
        <th class="px-4 py-2 border-r">Jumlah Kamar</th>
        <th class="px-4 py-2 border-r">Email</th>
        <th class="px-4 py-2 border-r">No Handphone</th>
        <th class="px-4 py-2 border-r">
            Check In 
            <input type="text" name="filter_checkin" id="filter_checkin" class="hidden">
            <button type="button" id="sort_icon">
                <i class="fa fa-calendar-day" aria-hidden="true"></i>
            </button>
        </th>
        <th class="px-4 py-2 border-r">Check Out</th>
        <th class="px-4 py-2 border-r">Status</th>
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
        <td class="border border-l-0 px-4 py-2">
            <a href="/status-reservasi/{{ $reservasi->id }}" class="border border-1 border-black rounded-full px-2 py-1">{{ $reservasi->status }}</a>
        </td>
    </tr>
    @endforeach
</tbody>
