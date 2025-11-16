@extends('layouts.app')
@section('content')
    <section id="home" class="position-relative">
        <div class="gradient-overlay"></div>
        <div class="content">
            <h1>SERVICE AC PANGGILAN TERPERCAYA</h1>
            <p>PRATAMA JAYA GRUP adalah spesialis dalam berbagai layanan AC, perbaikan AC, pembersihan, pemasangan,
                perawatan, dan instalasi.</p>
        </div>
    </section>

    @php
        $cards = [
            ['desc' => 'Instalasi AC', 'icon' => 'climate_mini_split'],
            ['desc' => 'Service AC', 'icon' => 'handyman'],
            ['desc' => 'Pergantian Sparepart', 'icon' => 'home_improvement_and_tools'],
            ['desc' => 'Pengisian Freon', 'icon' => 'gas_meter'],
            ['desc' => 'Cuci AC', 'icon' => 'soap'],
        ];
    @endphp

    <section id="services" class="container py-5 position-relative">
        <div class="row justify-content-center g-4">
            @foreach ($cards as $index => $card)
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex justify-content-center">
                    <div class="card shadow position-relative text-center"
                        style="width: 200px; min-height: 280px; background-color: #FFA722;">

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
                            <span class="material-symbols-outlined">
                                {{ $card['icon'] }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="location" class="position-relative">
        <div class="bg-wrapper"></div>
        <div class="content">
            <div class="map-responsive">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.299054785108!2d112.78186087504874!3d-7.32026587198397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7faeb7cc5040f%3A0xd864f553e87d9afe!2sPenjaringan%20Tim.%20V%2C%20Penjaringan%20Sari%2C%20Kec.%20Rungkut%2C%20Surabaya%2C%20Jawa%20Timur%2060297!5e0!3m2!1sen!2sid!4v1763257542553!5m2!1sen!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="info">
                <div class="info-card">
                    <span class="material-symbols-outlined">home</span>
                    <p>Desa Bangsal RT 9 RW 2 ( sebelah kanan Kecamatan Bangsal ) Kabupaten Mojokerto, Jawa Timur</p>
                </div>
                <div class="info-card">
                    <span class="material-symbols-outlined">call</span>
                    <p>+6287823873079</p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="features">
        <div class="features-container">
            <!-- Left Card: Images -->
            <div class="features-left">
                <div class="shape-card">
                    <img src="circle.png" alt="Circle" />
                </div>
                <div class="shape-card blue-card"></div>
                <div class="shape-card">
                    <img src="triangle.png" alt="Triangle" />
                </div>
                <div class="shape-card blue-card"></div>
            </div>

            <!-- Right Card: Scrollable List -->
            <div class="features-right">
                <h3>Main Context Heading</h3>
                <div class="features-list">
                    <div class="feature-item">
                        <h2>Item 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="feature-item">
                        <h2>Item 2</h2>
                        <p>Aliquam tincidunt mauris eu risus.</p>
                    </div>
                    <div class="feature-item">
                        <h2>Item 3</h2>
                        <p>Vestibulum auctor dapibus neque.</p>
                    </div>
                    <!-- Add more items as needed -->
                </div>
            </div>
        </div>
    </section> --}}
@endsection
