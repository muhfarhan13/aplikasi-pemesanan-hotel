<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Font_Awesome_5_solid_hotel.svg/768px-Font_Awesome_5_solid_hotel.svg.png?20180810212508">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>GENGGONG</title>
    <style>
        html,
        body {
            overflow-x: hidden;
        }
        .nav h1{
            font-family: Ubuntu, "times new roman", times, roman, serif;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-gray-100 to-transparent">
    @include('sweetalert::alert')

    <div class="navbar">
        @include('layouts.navbar')
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @include('layouts.footer')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/script.js') }}" defer="defer"></script>




    <script>
        var pesan = document.getElementById('pesan');
        pesan.addEventListener('click', function(){
            var checkin = document.getElementById('tanggal_checkin').value
            var checkout = document.getElementById('tanggal_checkout').value
            var jumlah = document.getElementById('jumlah_kamar').value

            document.getElementById('checkinHidden').setAttribute('value', checkin)
            document.getElementById('checkoutHidden').setAttribute('value', checkout)
            document.getElementById('jumlahkamarHidden').setAttribute('value', jumlahkamar)
        })
    </script>
</body>
</html>
