@extends('layouts.app')

@section('title', 'Frostcrown - Home')

@section('content')
    <!-- Hero -->
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="hero-title title-frost reveal">Conquer Northrend Once More</h1>
                    <p class="hero-subtitle reveal">Experience the glory of Wrath of the Lich King on a blizzlike server with an active community, professional staff, and regular updates.</p>
                    <div class="d-flex gap-3 flex-wrap reveal">
                        <a href="{{ route('register') }}" class="btn-frost">Create Account</a>
                        <a href="{{ route('statistics') }}" class="btn-outline-frost">View Statistics</a>
                    </div>
                </div>

                <div class="col-lg-6 reveal">
                    <div class="hero-image-wrapper">
                        <img src="artas.jpg"
                             alt="Dark Knight in Snowy Armor"
                             class="hero-image">
                    </div>
                </div>
            </div>

            <!-- Stats Bar -->
            <div class="stats-bar reveal">
                <div class="row">
                    <div class="col-6 col-md-3 stat-item">
                        <div class="stat-value" id="online-count">0</div>
                        <div class="stat-label">Online Now</div>
                    </div>
                    <div class="col-6 col-md-3 stat-item">
                        <div class="stat-value">4,892</div>
                        <div class="stat-label">Accounts</div>
                    </div>
                    <div class="col-6 col-md-3 stat-item">
                        <div class="stat-value">3.3.5a</div>
                        <div class="stat-label">Version</div>
                    </div>
                    <div class="col-6 col-md-3 stat-item">
                        <div class="stat-value">99.8%</div>
                        <div class="stat-label">Uptime</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 reveal">Why Choose Frostcrown</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-frost p-4 h-100">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h5>Anti-Cheat</h5>
                        <p class="text-muted mb-0">Advanced detection ensures fair gameplay.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-frost p-4 h-100">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <h5>Blizzlike Rates</h5>
                        <p class="text-muted mb-0">Authentic x1 rates for true veterans.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-frost p-4 h-100">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                        </div>
                        <h5>Community</h5>
                        <p class="text-muted mb-0">Join thousands in raids and PvP.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-frost p-4 h-100">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                        </div>
                        <h5>Support</h5>
                        <p class="text-muted mb-0">Professional staff and GM team.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Connect -->
    <section class="py-5">
        <div class="container">
            <div class="card-frost p-5 reveal">
                <h2 class="text-center mb-4">How to Connect</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="d-flex mb-4 align-items-start">
                            <div class="rank-badge rank-1 me-3">1</div>
                            <div><h6>Download Client</h6><p class="text-muted mb-0">Get 3.3.5a from our mirrors.</p></div>
                        </div>
                        <div class="d-flex mb-4 align-items-start">
                            <div class="rank-badge rank-2 me-3">2</div>
                            <div>
                                <h6>Set Realmlist</h6>
                                <p class="text-muted mb-2">Open realmlist.wtf and set:</p>
                                <code class="d-block p-2 rounded" style="background: rgba(79, 195, 247, 0.1); color: var(--accent-ice);">set realmlist logon.frostcrown.net</code>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="rank-badge rank-3 me-3">3</div>
                            <div><h6>Play</h6><p class="text-muted mb-0">Launch WoW.exe and enjoy.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

