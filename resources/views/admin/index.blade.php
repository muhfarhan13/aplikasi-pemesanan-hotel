@if (auth()->user()->role == "admin")

@extends('layouts.admin')

@section('content')

    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-400 fad fa-bed"></div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">{{ $jumlahTipe }}</h1>
                        <p>Tipe Kamar</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-400 fad fa-warehouse"></div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">{{ $jumlahFasilitasUmum }}</h1>
                        <p>Fasilitas Umum</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-400 fad fa-warehouse"></div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">{{ $jumlahKamar }}</h1>
                        <p>Sisa Kamar</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-400 fad fa-warehouse"></div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">{{ $jumlahKamarDipakai }}</h1>
                        <p>Jumlah Kamar Dipakai</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
                <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">
                    
                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-400 fad fa-warehouse"></div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">{{ $totalKamar}}</h1>
                        <p>Total kamar</p>
                    </div>                
                    <!-- end bottom -->
        
                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
    </div>

@endsection

@endif