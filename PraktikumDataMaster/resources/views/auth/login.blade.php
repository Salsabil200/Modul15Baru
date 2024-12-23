@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<div class="d-flex justify-content-center align-items-center vh-100" style="background-color: #007bff;">
    <div class="card p-4" style="width: 100%; max-width: 400px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
        <style>
            .hexagon {
                width: 55px;
                height: 60px;
                background-color: #007bff;
                margin: 0 auto;
                clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            }

            .divider {
                width: 80%;
                height: 1px;
                background-color: #d3d3d3;
                margin: 10px auto 20px;
            }

            .form-field {
                width: 80%;
                margin: 0 auto;
            }

            .btn-primary {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
            }
        </style>

        <div class="text-center mb-4">
            <!-- Logo Segi Enam -->
            <div class="hexagon"></div>
            <!-- Title -->
            <h4 class="mt-3" style="font-weight: bold; color: #333;">Employee Data Master</h4>
            <br>
            <div class="divider"></div>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Field -->
            <div class="mb-3 form-field">
                <input id="email" type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}"
                       required autocomplete="email" autofocus
                       placeholder="Enter Your Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="mb-3 form-field">
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password"
                       placeholder="Enter Your Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="divider"></div>
            <br>

            <!-- Login Button -->
            <div class="d-grid form-field">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-box-arrow-in-right"></i>
                    {{ __('Log In') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
