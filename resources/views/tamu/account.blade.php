@extends('layouts.tamu')

@section('content')
    <div class="container mx-auto my-20">
        <div class="lg:grid lg:grid-cols-2">
            <div class="mx-16 form card">
                <h2 class="uppercase text-2xl font-bold">Account</h2>
                <h1 class="uppercase text-4xl font-bold text-yellow-400">EDIT YOUR ACCOUNT!</h1>
                <div class="w-full text-left">
                    <form action="/update-account" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="flex items-center">
                            <div class="name mt-10 shadow-md mr-3 w-80 bg-white px-3 pt-2 pb-3 rounded-lg">
                                <label for="name" class="block mb-2 font-semibold text-yellow-400">Nama</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="text outline-none w-full">
                            </div>
                            <div class="password mt-10 shadow-md xl:mr-20 w-80 bg-white px-3 pt-2 pb-3 rounded-lg">
                                <label for="password" class="block mb-2 font-semibold text-yellow-400">Password</label>
                                <input type="password" name="password" id="password" placeholder="********" class="text outline-none w-full">
                            </div>
                        </div>
                        <div class="email mt-8 shadow-md xl:mr-20 w-full xl:w-80 bg-white px-3 pt-2 pb-3 rounded-lg">
                            <label for="email" class="block mb-2 font-semibold text-yellow-400">Email</label>
                            <input type="text" name="email" id="email" value="{{ old('email', $user->email) }}" class="text outline-none w-full">
                        </div>

                        <button type="submit" class="bg-yellow-400 px-4 py-2 font-semibold text-white rounded-md mt-8">Simpan</button>
                    </form>
                </div>
            </div>
            <div class="personal-data-illustration -mt-14 hidden lg:block">
                <img src="{{ asset('img/user-data.png') }}" class="border-none rounded-2xl" alt="">
            </div>
        </div>
    </div>

@endsection