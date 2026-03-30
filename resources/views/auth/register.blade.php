@extends('layouts.login')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 380px; border-radius: 12px;">

        <div class="text-center mb-4">
            <h4 class="fw-bold">📝 Daftar Akun</h4>
            <p class="text-muted small">Buat akun baru kamu</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Nama --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Nama</label>
                <input type="text" name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name') }}"
                       placeholder="Nama lengkap" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}"
                       placeholder="contoh@email.com" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <div class="input-group">
                    <input type="password" name="password" id="passwordInput"
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="Minimal 8 karakter" required>
                    <button class="btn btn-outline-secondary" type="button"
                            onclick="togglePassword('passwordInput', 'toggleBtn1')" id="toggleBtn1">
                        👁️
                    </button>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Konfirmasi Password --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Konfirmasi Password</label>
                <div class="input-group">
                    <input type="password" name="password_confirmation" id="passwordConfirm"
                           class="form-control"
                           placeholder="Ulangi password" required>
                    <button class="btn btn-outline-secondary" type="button"
                            onclick="togglePassword('passwordConfirm', 'toggleBtn2')" id="toggleBtn2">
                        👁️
                    </button>
                </div>
            </div>

            <button class="btn btn-success w-100 mb-3">Daftar</button>

            <div class="text-center">
                <span class="text-muted small">Sudah punya akun?</span>
                <a href="{{ route('login') }}" class="small fw-semibold ms-1">Login di sini</a>
            </div>

        </form>
    </div>
</div>

<script>
function togglePassword(inputId, btnId) {
    const input = document.getElementById(inputId);
    const btn   = document.getElementById(btnId);
    if (input.type === 'password') {
        input.type = 'text';
        btn.innerHTML = '🙈';
    } else {
        input.type = 'password';
        btn.innerHTML = '👁️';
    }
}
</script>

@endsection