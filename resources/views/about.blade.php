@extends('layouts.app')

@section('title', 'About')

@section('content')
<style>
    .about-hero {
        background-image: url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee');
        background-size: cover;
        background-position: center;
        border-radius: 15px;
        padding: 90px 20px;
        color: white;
    }

    .about-card {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
    }
</style>

<!-- Hero Section -->
<div class="about-hero text-center mb-5">
    <h1 class="fw-bold">Tentang Kami</h1>
    <p class="lead">
        Membangun solusi teknologi yang inovatif dan berkelanjutan
    </p>
</div>

<!-- Content Section -->
<div class="row g-4">
    <div class="col-md-6">
        <div class="card about-card shadow h-100">
            <div class="card-body">
                <h4 class="mb-3">Profil Perusahaan</h4>
                <p>
                    Company Profile adalah perusahaan yang bergerak di bidang
                    teknologi informasi dan pengembangan aplikasi berbasis web.
                </p>
                <p>
                    Kami berkomitmen untuk memberikan solusi digital yang
                    efektif, efisien, dan mudah digunakan.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card about-card shadow h-100">
            <div class="card-body">
                <h4 class="mb-3">Visi & Misi</h4>

                <p><strong>Visi</strong></p>
                <p>
                    Menjadi perusahaan teknologi yang terpercaya dan inovatif.
                </p>

                <p><strong>Misi</strong></p>
                <ul>
                    <li>Mengembangkan solusi IT berkualitas</li>
                    <li>Mendukung transformasi digital</li>
                    <li>Memberikan layanan profesional</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
