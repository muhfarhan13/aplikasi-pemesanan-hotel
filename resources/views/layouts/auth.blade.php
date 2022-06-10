@if(!auth()->check())

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Font_Awesome_5_solid_hotel.svg/768px-Font_Awesome_5_solid_hotel.svg.png?20180810212508">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="content">
        @yield('content')
        {{-- <div class="lg:grid lg:grid-cols-2">
            <div class="hidden lg:block img bg-[url('https://i.pinimg.com/originals/78/8f/c5/788fc592bf81108bc29d043ec3c17748.jpg')] bg-cover bg-no-repeat h-screen">
                <h1 class="font-bold text-4xl py-10 px-24 italic" style="font-family: adobe-garamond-pro;">"The great advantage of a hotel is that it is a refuge from home life"</h1>
            </div>
            <div class="login container mx-auto my-28 lg:px-28 lg:my-28">
            </div>
        </div> --}}
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            if(password.getAttribute('type') === 'password'){
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            } else {
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            }
        });
    </script>
</body>
</html>

@endif