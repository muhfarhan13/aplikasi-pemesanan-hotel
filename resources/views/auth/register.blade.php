@extends('layouts.auth')

@section('content')

    <div class="lg:grid lg:grid-cols-2">
        <div class="hidden lg:block img bg-[url('https://i.pinimg.com/originals/78/8f/c5/788fc592bf81108bc29d043ec3c17748.jpg')] bg-cover bg-no-repeat h-screen">
            <h1 class="font-bold text-4xl py-10 px-24 italic" style="font-family: adobe-garamond-pro;">"The great advantage of a hotel is that it is a refuge from home life"</h1>
        </div>
        <div class="login container px-10 xl:px-40 mx-auto my-28 lg:px-28 lg:my-28">
            <form method="POST" action="{{ route('register') }}">
                @csrf
        
                <h1 class="font-bold text-4xl text-center">Sign Up</h1>
                <div class="name mt-12">
                    <input id="name" type="text"
                        class="bg-gray-100 border-solid px-3 py-4 rounded-lg w-full @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukan nama">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-yellow-400">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="email mt-6">
                    <input id="email" type="email"
                        class="bg-gray-100 border-solid px-3 py-4 rounded-lg w-full @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukan email">
        
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-yellow-400">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="password mt-6">
                    <input id="password" type="password"
                        class="bg-gray-100 border-solid px-3 py-4 rounded-lg w-full @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Masukan password">
        
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-yellow-400">{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="password-confirm mt-6">
                    <input id="password-confirm" type="password" class="bg-gray-100 border-solid px-3 py-4 rounded-lg w-full"
                        name="password_confirmation" required autocomplete="new-password" placeholder="Masukan konfirmasi password">
                </div>
                <button type="submit" class="px-20 text-center text-white bg-yellow-400 w-full py-3 rounded-lg mt-8 font-semibold text-md">
                    Register
                </button>
                <div class="login-link mt-4">
                    Already account?
                    <a class="btn hover:text-yellow-400 hover:underline" href="{{ route('login') }}">
                         Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection
