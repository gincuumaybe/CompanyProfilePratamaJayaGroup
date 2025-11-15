@extends('layouts.app')

@section('content')
    <section id="home" class="position-relative">
        <img src="{{ asset('images/homekolase.png') }}" alt="Hero Image" class="img-fluid w-100 h-100"
            style="object-fit: cover;">
        <div class="top-gradient"></div>
        <div class="bottom-gradient"></div>
        <div class="content">
            <h1>SERVICE AC PANGGILAN TERPERCAYA</h1>
            <p>PRATAMA JAYA GRUP adalah spesialis dalam berbagai layanan AC, perbaikan AC, pembersihan, pemasangan,
                perawatan, dan instalasi.</p>
        </div>
    </section>

    @php
        $cards = [
            ['desc' => 'Instalasi AC'],
            ['desc' => 'Service AC'],
            ['desc' => 'Pergantian Sparepart'],
            ['desc' => 'Pengisian Freon'],
            ['desc' => 'Cuci AC'],
        ];
    @endphp

    <section id="cards" class="container py-5 position-relative" style="margin-top: -100px; z-index: 5;">
        <div class="row justify-content-center g-4">
            @foreach ($cards as $index => $card)
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex justify-content-center">
                    <div class="card shadow position-relative text-center" style="width: 200px; min-height: 320px; background-color: #FFA722;">

                        <!-- Nomor di pojok kiri atas -->
                        <div class="card-number position-absolute top-0 start-0 fw-bold px-2 py-1 rounded-end">
                            {{ $index + 1 }}
                        </div>

                        <!-- Konten tengah -->
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h3 class="card-desc">{{ $card['desc'] }}</h3>
                        </div>

                        <!-- Icon di bawah -->
                        <div class="card-icon mt-auto mb-3">
                            <i class="fas fa-tools fa-3x text-white"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
