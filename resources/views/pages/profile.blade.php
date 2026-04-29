@extends('layouts.app')

@section('title', 'Frostcrown - Profile')

@section('content')
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <!-- Profile Card -->
                    <div class="card-frost p-4 reveal">
                        <div class="text-center mb-4">
                            <div class="w-100 rounded-circle mb-3" style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--accent-ice), var(--accent-frost)); margin: 0 auto; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 30px rgba(79, 195, 247, 0.4);">
                                <span style="font-size: 3rem; color: var(--bg-primary);">👤</span>
                            </div>
                            <h3 class="title-frost">Adventurer</h3>
                            <p class="text-muted mb-2">Not logged in</p>
                        </div>

                        <div style="border-top: 1px solid var(--border-frost); padding-top: 1.5rem;">
                            <div class="mb-3">
                                <small class="text-muted text-uppercase">Account Status</small>
                                <p class="mb-0">
                                    <span class="badge" style="background: #ef4444;">Inactive</span>
                                </p>
                            </div>
                            <div class="mb-3">
                                <small class="text-muted text-uppercase">Account Age</small>
                                <p class="mb-0">N/A</p>
                            </div>
                            <div class="mb-3">
                                <small class="text-muted text-uppercase">Characters</small>
                                <p class="mb-0">0</p>
                            </div>
                            <button class="btn-frost w-100" style="margin-top: 1.5rem;">Login to Account</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <!-- Profile Details -->
                    <div class="card-frost p-4 p-md-5 reveal mb-4">
                        <h2 class="title-frost mb-4">Profile Information</h2>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div>
                                    <small class="text-muted text-uppercase">Username</small>
                                    <p class="mb-3">-</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <small class="text-muted text-uppercase">Email</small>
                                    <p class="mb-3">-</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div>
                                    <small class="text-muted text-uppercase">Account Created</small>
                                    <p class="mb-3">-</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <small class="text-muted text-uppercase">Last Login</small>
                                    <p class="mb-3">-</p>
                                </div>
                            </div>
                        </div>

                        <hr style="border-color: var(--border-frost);" class="my-4">

                        <h5 class="mb-3">Security</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <button class="btn btn-outline-secondary w-100">Change Password</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-outline-secondary w-100">Update Email</button>
                            </div>
                        </div>
                    </div>

                    <!-- Characters -->
                    <div class="card-frost p-4 p-md-5 reveal mb-4">
                        <h3 class="title-frost mb-4">Your Characters</h3>

                        <div style="padding: 2rem; background: rgba(79, 195, 247, 0.05); border-radius: 8px; border: 1px solid var(--border-frost); text-align: center;">
                            <p class="text-muted mb-0">No characters yet. Create an account to get started!</p>
                        </div>
                    </div>

                    <!-- Statistics -->
                    <div class="card-frost p-4 p-md-5 reveal">
                        <h3 class="title-frost mb-4">Account Statistics</h3>

                        <div class="row text-center">
                            <div class="col-md-4 mb-3">
                                <div class="stat-value">0</div>
                                <div class="stat-label">Characters</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="stat-value">0</div>
                                <div class="stat-label">Playtime (Hours)</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="stat-value">0</div>
                                <div class="stat-label">PvP Kills</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info Box -->
            <div class="alert alert-info mt-5 reveal" style="background: rgba(79, 195, 247, 0.1); border: 1px solid var(--border-frost);">
                <h5>Not logged in</h5>
                <p class="mb-0">Please <a href="{{ route('register') }}" style="color: var(--accent-ice);">create an account</a> or visit the login page to access your profile.</p>
            </div>
        </div>
    </section>
@endsection

