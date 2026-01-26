@extends('layouts.app')

@section('title', 'Company Profile')

@section('content')

<!-- ===== Carousel Section ===== -->
<div id="companyCarousel" class="carousel slide mb-5" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="https://picsum.photos/1200/400?random=1" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Solusi Teknologi Terpercaya</h5>
                <p>Kami menghadirkan layanan IT yang profesional dan inovatif.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://picsum.photos/1200/400?random=2" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Pengembangan Aplikasi</h5>
                <p>Web dan sistem informasi sesuai kebutuhan organisasi.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://picsum.photos/1200/400?random=3" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Dukungan Profesional</h5>
                <p>Didukung oleh tim berpengalaman di bidang teknologi informasi.</p>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#companyCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#companyCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- ===== Blog / News Section ===== -->
<h2 class="mb-4">Berita & Artikel Terbaru</h2>

<div class="row">

    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="https://picsum.photos/400/250?random=11" class="card-img-top" alt="Artikel 1">
            <div class="card-body">
                <h5 class="card-title">Transformasi Digital</h5>
                <p class="card-text">
                    Peran teknologi informasi dalam meningkatkan efisiensi organisasi.
                </p>
                <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="https://picsum.photos/400/250?random=12" class="card-img-top" alt="Artikel 2">
            <div class="card-body">
                <h5 class="card-title">Keamanan Sistem Informasi</h5>
                <p class="card-text">
                    Pentingnya menjaga keamanan data di era digital.
                </p>
                <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="https://picsum.photos/400/250?random=13" class="card-img-top" alt="Artikel 3">
            <div class="card-body">
                <h5 class="card-title">Pengembangan Web Modern</h5>
                <p class="card-text">
                    Framework dan tools yang banyak digunakan saat ini.
                </p>
                <a href="#" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
            </div>
        </div>
    </div>

</div>

@endsection
