@extends('layouts.app')

@section('title', 'Frostcrown - Register')

@section('content')
    <section>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5">
                    <div class="card-frost p-4 p-md-5 reveal">
                        <h2 class="text-center mb-2 title-frost">Create Account</h2>
                        <p class="text-center text-muted mb-4">Join the battle for Azeroth</p>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label-custom">Username</label>
                                <input type="text" class="form-control form-control-custom @error('username') is-invalid @enderror"
                                       id="username" name="username" placeholder="Enter username"
                                       value="{{ old('username') }}" required>
                                @error('username')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label-custom">Email</label>
                                <input type="email" class="form-control form-control-custom @error('email') is-invalid @enderror"
                                       id="email" name="email" placeholder="Enter email"
                                       value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label-custom">Password</label>
                                <input type="password" class="form-control form-control-custom @error('password') is-invalid @enderror"
                                       id="password" name="password" placeholder="Enter password" required>
                                <div class="password-strength"><div class="password-strength-bar" id="strengthBar"></div></div>
                                @error('password')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label-custom">Confirm Password</label>
                                <input type="password" class="form-control form-control-custom @error('password_confirmation') is-invalid @enderror"
                                       id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>
                                @error('password_confirmation')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn-frost w-100">Create Account</button>
                        </form>

                        <p class="text-center text-muted mt-4">
                            Already have an account? <a href="{{ route('home') }}" style="color: var(--accent-ice);">Back to Home</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

