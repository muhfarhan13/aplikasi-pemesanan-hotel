@extends('layouts.tamu')

@section('content')

    <section>
        <div class="jumbotron container px-10 mx-auto -mt-16 sm:flex sm:items-center sm:justify-center sm:px-10 md:px-16 md:-mt-10">
            <div class="content lg:grid lg:grid-cols-2">
                <div class="text-content mt-28 sm:mt-44 mb-6 sm:mb-8 md:mb-0">
                    <h1 class="jumbotron-content text-4xl xbl:text-5xl mbl:text-6xl sm:text-6xl md:mr-44 font-bold lg:w-8/12 tracking-wide text-yellow-400">
                        Fresh, quiet and paceful.
                    </h1>
                    <p class="lg:w-10/12 mt-7 md:mr-52">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque doloremque beatae ex accusantium at voluptatum eum, provident consectetur corrupti blanditiis est ipsa fugiat sequi numquam debitis odio molestiae dolorem. Illum.</p>
                </div>
                <div class="img-content md:-mt-64 lg:mt-44 xl:mt-32">
                    <img src="https://images.unsplash.com/photo-1574643156929-51fa098b0394?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="rounded-tr-3xl md:ml-[28em] lg:ml-0">
                </div>
                <div class="form mt-10 sm:mt-4 md:-mt-24 lg:mt-[34rem] xl:mt-[29rem] md:absolute">
                    <div id="formPesan" class="contact-form bg-white shadow-lg sm:px-10 py-6 px-7 rounded-bl-3xl md:rounded-none md:flex sm:items-center">
                        <div class="checkin-div block mr-1 md:mr-3 lg:mr-13 xl:mr-14">
                            <ul>
                                <li>
                                    <label for="t_checkin" class="text-sm text-yellow-400 font-semibold italic">Check-in</label>
                                </li>
                                <li>                                    
                                    <input type="date" id="t_checkin" name="t_checkin" class="focus:outline-none w-full">
                                </li>
                            </ul>
                        </div>
                        <div class="checkout-div block mr-1 md:mr-3 lg:mr-13 xl:mr-14 mt-3 md:mt-0">
                            <ul>
                                <li>
                                    <label for="t_checkout" class="text-sm text-yellow-400 font-semibold italic">Check-out</label>
                                </li>
                                <li>
                                    <input type="date" id="t_checkout" name="t_checkout" class="focus:outline-none w-full">
                                </li>
                            </ul>
                        </div>               
                        <div class="checkout-div block mr-1 md:mr-3 lg:mr-13 xl:mr-2 mt-3 md:mt-0">
                            <ul>
                                <li>
                                    <label for="t_checkout" class="text-sm text-yellow-400 font-semibold italic">Jumlah kamar</label>
                                </li>
                                <li>
                                    <input type="number" min="1" placeholder="kamar yang dipesan" id="j_kamar" name="j_kamar" class="focus:outline-none">
                                </li>
                            </ul>
                        </div>
                        @if(auth()->check())
                        <div id="modal" class="modal">
                            <form action="{{ route('pesan-kamar') }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="form-section">
                                    <input type="text" placeholder="Masukan nama pemesan" id="n_pemesan" name="n_pemesan" class="focus:outline-none my-4 py-4 mr-10 w-full border-b-2 block" value="{{ old('n_pemesan', $user->name ) }}" readonly>
                                    <input type="email" placeholder="Masukan email" id="email" name="email" class="focus:outline-none my-4 py-4 mr-10 w-full border-b-2 block" value="{{ old('email', $user->email) }}" readonly>
                                    <input type="number" placeholder="Masukan nomor handphone" id="no_handphone" name="no_handphone" class="focus:outline-none my-4 py-4 mr-10 w-full border-b-2 block">
                                    <input type="text" placeholder="Masukan nama tamu" id="n_tamu" name="n_tamu" class="focus:outline-none my-4 py-4 mr-10 w-full border-b-2 block">
                                    <input type="text" id="checkin" name="checkin" class="hidden">
                                    <input type="text" id="checkout" name="checkout" class="hidden">
                                    <input type="number" id="k_jkamar" name="k_jkamar" class="hidden">
                                    
                                    <select name="kamar" id="kamar" class="w-full my-2 py-2 focus:outline-none">
                                        @foreach($kamars as $kamar)
                                        <option value="{{ $kamar->id }}">
                                            <column>{{ $kamar->tipe }} </column>
                                            <column>| Kamar tersedia: {{ $kamar->jumlah_kamar }}</column>
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-navigation flex justify-between">
                                    <button type="submit" id="submit" class="submit my-4 font-semibold px-5 py-1 shadow-md bg-yellow-400 w-full">Konfirmasi Pesanan</button>
                                </div>
                            </form>
                        </div>
                        @endif
                        <div class="form-button pt-4 md:mt-0">
                            <a type="button" href="{{ auth()->check() ? '#modal' : route('login')}}" rel="{{ auth()->check() ? 'modal:open' : '' }}" id="show-modal" class="next show-modal px-5 py-1 shadow-md bg-yellow-400 font-semibold w-full text-center rounded-bl-xl md:rounded-none">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about container mx-auto py-24 lg:pt-56 lg:pb-32 sm:py-28 md:py-32 px-10 md:px-16 xl:py-20">
            <div class="content lg:grid lg:grid-cols-2">
                <img src="https://res.cloudinary.com/indonesiadesign/image/upload/f_auto,fl_progressive,q_auto:best/60c59433-9c59-49ac-8ead-92dd18ea48cf.jpg" class="lg:pr-20 lg:rounded-bl-3xl lg:pt-8 lg:w-full xl:w-11/12">
                <div class="text-content">
                    <h1 class="font-bold text-yellow-400 text-4xl mt-6">About Us</h1>
                    <p class="mt-6 text-md text-justify">
                        Hotel Genggong adalah Hotel fiksi yang dibuat oleh Muhammad Farhan dalam rangka Uji Kompetensi Keahlian atau UKK pada saat kelas 12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod cupiditate dolorum, beatae voluptatem optio voluptatum accusamus repellendus temporibus. Quidem autem voluptatum illo nesciunt deserunt odio consectetur voluptatibus sed dignissimos vel, aliquid amet reprehenderit quaerat placeat molestiae incidunt. Odio, deserunt ad blanditiis tempora cum error nihil explicabo dolor provident odit hic consectetur dolore voluptate iusto numquam totam esse labore? Placeat iste dolorum consectetur, quas deserunt unde optio nobis, est perspiciatis ullam quos ab, totam explicabo eligendi quibusdam repudiandae laudantium fugiat excepturi.
                    </p>
                </div>
            </div>
        </div>
        <div class="step-order pt-16 px-10 container mx-auto lg:px-16 lg:grid lg:grid-cols-3 lg:pt-36 pb-16">
            <div class="step-1 drop-shadow-sm text-center lg:-mt-20 bg-white rounded-2xl lg:mr-3">
                <i class="fa-solid fa-user-plus rounded-full -mt-16 bg-white fa-3x px-8 py-9 drop-shadow-lg shadow-gray-50 text-yellow-400"></i>
                <div class="text-step px-10 py-5">
                    <h1 class="font-semibold text-xl">1. Siapkan Akun</h1>
                    <p class="py-4 mbl:px-10">Login atau daftarkan akun kamu jika belum memiliki akun</p>
                </div>
            </div>
            <div class="step-2 drop-shadow-sm text-center lg:-mt-20 mt-20 bg-white rounded-2xl lg:mx-3">
                <i class="fa-solid fa-hotel rounded-full -mt-16 bg-white fa-3x p-9 drop-shadow-lg shadow-gray-50 text-yellow-400"></i>
                <div class="text-step px-10 py-5">
                    <h1 class="font-semibold text-xl">2. Pesan Kamar</h1>
                    <p class="py-4 mbl:px-10">Isi formulir pesan dan konfirmasi pesan dengan lengkap</p>
                </div>
            </div>
            <div class="step-2 drop-shadow-sm text-center lg:-mt-20 mt-20 bg-white rounded-2xl lg:ml-3">
                <i class="fa-solid fa-calendar-day rounded-full -mt-16 bg-white fa-3x px-9 py-8 drop-shadow-lg shadow-gray-50 text-yellow-400"></i>
                <div class="text-step mbl:px-10 py-5">
                    <h1 class="font-semibold text-xl">3. Cetak Reservasi</h1>
                    <p class="py-4 px-10">Pergi ke menu Reservasi dikanan atas lalu cetak reservasi untuk diberikan ke Resepsionis</p>
                </div>
            </div>
        </div>
    </section>

@endsection
