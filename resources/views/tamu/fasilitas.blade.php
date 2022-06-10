{{-- @if (auth()->user()->role == "tamu") --}}

@extends('layouts.tamu')

@section('content')

{{-- <div class="card w-96 bg-base-100 shadow-xl image-full">
    @foreach($fasilitas as $fs)
    <figure><img src="{{ asset('storage/'.$fs->gambar_fasilitas.'') }}" alt="Shoes" /></figure>
    <div class="card-body">
    <h2 class="card-title">{{ $fs->fasilitas_umum }}</h2>
    <p>{{ $fs->keterangan }}</p>
    <div class="card-actions justify-end">
      <button class="btn btn-primary">Buy Now</button>
    </div>
  </div>
  @endforeach
</div> --}}

{{-- <main class="grid md:grid-cols-2 lg:grid-cols-3 p-4 hover:">
  @foreach($fasilitas as $fs)
	<div
		class="overflow-hidden relative justify-end cursor-pointer capitalize flex flex-col bg-red-500 z-50 object-cover text-white">
		<img src="{{ asset('storage/'.$fs->gambar_fasilitas.'') }}"/>
		<div class="absolute p-3 flex flex-col w-full bg-gradient-to-br from-indigo-500">
			<span class="text">{{ $fs->fasilitas_umum }}</span>
			<span class="font-semibold capitalize" >{{ $fs->keterangan }}</span>
		</div>
	</div>
  @endforeach
</main> --}}
{{-- <div class="container mx-auto">
<h1 class="text-4xl font-bold mb-4 mt-12">Fasilitas</h1>
<div class="grid md:grid-cols-2 lg:grid-cols-3 mx-16">
@foreach($fasilitas as $fs)
<div class="relative group overflow-hidden bg-black">
  <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="{{ asset('storage/'.$fs->gambar_fasilitas.'') }}" />
  <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
  <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0 mt-4">
    <div class="absolute w-full flex place-content-center">
      <p class="capitalize font-serif font-bold text-3xl text-center drop-shadow-2xl text-white mt-10">{{ $fs->fasilitas_umum }}</p>
    </div>
    <div class="absolute w-full flex place-content-center mt-24">
      <p class="font-sans text-center w-4/5 text-white">{{ $fs->keterangan }}</p>
    </div>
  </div>
</div>
@endforeach
</div>
</div> --}}

<section class="overflow-hidden mt-10 mb-16">
  <div class="container px-5 py-2 mx-auto lg:pt-4 xl:px-16 text-center">
    <div class="flex items-center mx-2 mbl:mx-4 sm:mx-1 md:px-52">
      <div class="flex-grow bg bg-black opacity-50 h-0.5"></div>
      <h1 class="text-3xl font-extrabold uppercase align-middle text-center px-2 mbl:px-4 md:px-8 opacity-80">Fasilitas Umum</h1>
      <div class="flex-grow bg bg-black opacity-50 h-0.5"></div>
    </div>
    <div class="title mb-14 mt-4">
    </div>
    <div class="lg:flex lg:flex-wrap -m-1 md:-m-2">
      @foreach($fasilitass->chunk(4) as $fasilitas)
      <div class="lg:flex lg:flex-wrap lg:w-1/2">
        @foreach($fasilitas as $fs)
        <div class="lg:w-1/2 relative group overflow-hidden border-4 border-white">
          <img alt="gallery" class="object-cover w-full h-full transform duration-700 backdrop-opacity-100 "
            src="{{ asset('storage/'.$fs->gambar_fasilitas.'') }}">
          <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
          <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0 mt-8 sm:mt-8 md:mt-0 lg:mt-20 xl:mt-36">
            <div class="absolute w-full flex place-content-center">
              <p class="capitalize font-medium text-3xl text-center drop-shadow-2xl shadow-red-700 text-white mt-10">{{ $fs->fasilitas_umum }}</p>
            </div>
            <div class="absolute w-full flex place-content-center mt-20">
              <p class="font-sans text-center w-4/5 text-lg text-white leading-none">{{ $fs->keterangan }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- <div class="container mx-auto mt-4 mb-24">
    <div class="head px-8 sm:mx-8">
        <h1 class="text-4xl font-bold mb-4 mt-12">Fasilitas</h1>
        <div class="grid md:grid-cols-2 lg:grid-cols-3">
            @foreach($fasilitas as $fs)
            <div class="relative group overflow-hidden border-4 border-white">
              <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="{{ asset('storage/'.$fs->gambar_fasilitas.'') }}" />
              <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
              <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0 mt-3 sm:mt-8 md:mt-0 lg:mt-10 xl:mt-24">
                <div class="absolute w-full flex place-content-center">
                  <p class="capitalize font-serif font-bold text-3xl text-center drop-shadow-2xl text-white mt-10">{{ $fs->fasilitas_umum }}</p>
                </div>
                <div class="absolute w-full flex place-content-center mt-24">
                  <p class="font-sans text-center w-4/5 text-xl text-white">{{ $fs->keterangan }}</p>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div> --}}

@endsection

{{-- @endif --}}