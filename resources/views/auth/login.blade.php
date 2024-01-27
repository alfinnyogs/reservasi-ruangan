@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5"></div>
<div class="container">
    <div class="row my-5"></div>
    <div class="row my-5 justify-content-center">
        <div class="col-md-5 my-3">
            <center>
                <img src="{{ ('assets/img/logoIF.png') }}" style="width: 120px; weight: 120px; display:block; margin:auto;">
                <p class="my-2 mb-2" style="font-weight: bold; font-size: 30px; color: black; ">Selamat Datang di SI-REKAN</p>
                <p class="my-2" style="font-weight: bold; font-size: 15px; color: black; ">Sistem Informasi & Reservasi Kamar Informatika</p>
            </center>
        </div>
        <div class="col-md-6 justify-content-center">
            <div class="card">
                <div class="card-header" style="font-weight: bold; background-color: #f7d217">{{ __('Halaman Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Kata Sandi') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ingat Saya') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4 font-weight-bold">
                                <button type="submit" class="btn btn-outline-warning" style="font-weight: bold;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa Kata Sandi Anda?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
