
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1 style="color: #FACC15; font-weight: 700; text-transform: uppercase; font-size: 2.25rem; line-height: 2.5rem; font-family: Ubuntu;"><i class="fa-solid fa-hotel" style="color: black"></i> <span style="color: black">GENG</span><span class="uppercase text-yellow-400">GONG</span></h1>
        {{-- <img src="{{ public_path('img/hotel-illustration.png') }}" style="width: 100%"> --}}
        <div class="contact flex justify-between w-full mt-2">
            <div class="whatsapp">
                <i class="fa-brands fa-whatsapp-square"></i> (02) 999 6666
            </div>
            <div class="mail">
                <i class="fa-solid fa-envelope" aria-hidden="true"></i> cs@genggong.com
            </div>
        </div>
        <hr style="margin-top: 10px; background-color: black; height: 1.3px">
        <div class="customer-detail">
            <h2 style="font-weight: 500; text-transform: uppercase;">Customer Detail</h2>
            <label style="display: block; font-size: 19px;">Nama Pemesan : {{ $reservasi->nama_pemesan }}</label>
            <label style="display: block; font-size: 19px;">Email : {{ $reservasi->email }}</label>
            <label style="display: block; font-size: 19px;">No Handphone : {{ $reservasi->no_handphone }}</label>
        </div>
        <div class="payment-detail" style="margin-top: 20px;">
            <table style="border: 1px solid; width:100%;">
                <thead>
                    <tr style="padding: 10px;">
                        <th style="border: 1px solid;">Nama Tamu</th>
                        <th style="border: 1px solid;">Tipe Kamar</th>
                        <th style="border: 1px solid;">Jumlah Kamar</th>
                        <th style="border: 1px solid;">Checkin</th>
                        <th style="border: 1px solid;">Checkout</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="padding: 10px;">
                        <td style="border: 1px solid; text-align: center;">{{ $reservasi->nama_tamu }}</td>
                        <td style="border: 1px solid; text-align: center;">{{ $reservasi->kamar->tipe }}</td>
                        <td style="border: 1px solid; text-align: center;">{{ $reservasi->jumlah_kamar }}</td>
                        <td style="border: 1px solid; text-align: center;">{{ $reservasi->tanggal_checkin }}</td>
                        <td style="border: 1px solid; text-align: center;">{{ $reservasi->tanggal_checkout }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="total-harga-section">
        <table style="border: 1px solid; width:100%;">
            <tr style="border: 1px solid; width:100%;">
                <td style="border: 1px solid; text-align: center;">
                    <label>Total harga: </label>
                    <label>Rp{{ number_format($reservasi->total_harga) }}</label>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>    