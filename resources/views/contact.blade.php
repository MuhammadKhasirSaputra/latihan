@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<style>
    .contact-bg {
        background-image: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470');
        background-size: cover;
        background-position: center;
        border-radius: 15px;
        padding: 80px 20px;
        color: white;
    }

    .contact-card {
        background: rgba(255, 255, 255, 0.85);
        border-radius: 15px;
    }
</style>

<div class="contact-bg mb-5">
    <div class="text-center">
        <h1 class="fw-bold">Hubungi Kami</h1>
        <p class="lead">Kami siap membantu kebutuhan teknologi Anda</p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card contact-card shadow">
            <div class="card-body text-center">
                <h4 class="mb-3">Company Profile</h4>

                <p>
                    <strong>Email</strong><br>
                    info@companyprofile.com
                </p>

                <p>
                    <strong>Telepon</strong><br>
                    0812-3456-7890
                </p>

                <p>
                    <strong>Alamat</strong><br>
                    Jakarta, Indonesia
                </p>

                <a href="mailto:info@companyprofile.com" class="btn btn-dark mt-3">
                    Kirim Email
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
