@if(!auth()->check()) 

@extends('layouts.auth') 

@section('content')
    <div class="lg:grid lg:grid-cols-2">
        <div class="hidden lg:block img bg-[url('https://i.pinimg.com/originals/78/8f/c5/788fc592bf81108bc29d043ec3c17748.jpg')] bg-cover bg-no-repeat h-screen">
            <h1 class="font-bold text-4xl py-10 px-24 italic" style="font-family: adobe-garamond-pro;">"The great advantage of a hotel is that it is a refuge from home life"</h1>
        </div>
        <div class="login container px-10 xl:px-40 sm:mx-auto my-28 lg:px-28 lg:my-28">
            <form method="POST" action="{{ route('login') }}" class="mt-10 mx-auto">
                @csrf
                <h1 class="font-bold text-4xl text-center">Sign In</h1>
                <div class="email mt-10">
                    <input type="text" placeholder="Email"
                        class="bg-gray-100 border-solid px-3 py-4 rounded-lg w-full @error('email') is-invalid @enderror" id="email"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback text-yellow-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="password mt-8 flex items-center">
                    <input type="password" placeholder="Password"
                        class="bg-gray-100 border-solid px-3 py-4 rounded-lg w-full @error('password') is-invalid @enderror"
                        id="password" name="password" required autocomplete="current-password" />
                    <i class="fa fa-eye-slash -ml-10" id="togglePassword" aria-hidden="true"></i>
                    @error('password')
                    <span class="invalid-feedback text-yellow-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input bg-gray-100 border-solid" type="checkbox" name="remember" id="remember" {{
                        old("remember") ? "checked" : "" }}>
        
                    <label class="form-check-label" for="remember"> Remember Me </label>
                </div>
                <button type="submit"
                    class="px-20 text-center text-white bg-yellow-400 w-full py-3 rounded-lg mt-6 font-semibold text-md">
                    Login
                </button>
                <div class="forgot-password mt-4">
                    Don't have acccount?
                    <a class="btn hover:text-yellow-400 hover:underline" href="{{ route('register') }}">
                         Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection 

@endif