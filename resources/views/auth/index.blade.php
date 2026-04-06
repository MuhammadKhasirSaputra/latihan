@extends('layouts.login')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 380px; border-radius: 12px;">

        <div class="text-center mb-4">
            <h4 class="fw-bold">🔑 Login</h4>
            <p class="text-muted small">Masuk ke akun kamu</p>
        </div>

        <form method="POST" action="/login">
            @csrf

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

            {{-- Password + Toggle Mata --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <div class="input-group">
                    <input type="password" name="password" id="passwordInput"
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="Masukkan password" required>
                    <button class="btn btn-outline-secondary" type="button"
                            onclick="togglePassword()" id="toggleBtn">
                        👁️
                    </button>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger py-2">
                {{ $errors->first() }}
            </div>
            @endif

            <button class="btn btn-primary w-100 mb-3">Login</button>

            <div class="text-center">
                <span class="text-muted small">Belum punya akun?</span>
                <a href="{{ route('register') }}" class="small fw-semibold ms-1">Daftar di sini</a>
            </div>

        </form>
    </div>
</div>

<script>
function togglePassword() {
    const input = document.getElementById('passwordInput');
    const btn   = document.getElementById('toggleBtn');
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