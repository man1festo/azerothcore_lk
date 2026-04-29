<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Frostcrown - WotLK Private Server')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-primary: #0a0d14;
            --bg-secondary: #111827;
            --bg-card: rgba(17, 24, 39, 0.85);
            --accent-ice: #4fc3f7;
            --accent-frost: #81d4fa;
            --accent-gold: #ffd54f;
            --text-primary: #e8f4fc;
            --text-muted: #a8c0d6;
            --border-frost: rgba(79, 195, 247, 0.25);
            --horde-red: #c41e3a;
            --alliance-blue: #0078ff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Open Sans', sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .text-muted { color: var(--text-muted) !important; }

        /* Background Atmosphere */
        .bg-atmosphere {
            position: fixed;
            inset: 0;
            z-index: -1;
            background:
                radial-gradient(ellipse at 20% 20%, rgba(79, 195, 247, 0.08) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 80%, rgba(129, 212, 250, 0.05) 0%, transparent 50%),
                linear-gradient(180deg, #0a0d14 0%, #0f1624 50%, #0a0d14 100%);
        }

        /* Frost particles */
        .frost-particles {
            position: fixed;
            inset: 0;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            border-radius: 50%;
            opacity: 0;
            animation: float-particle 20s infinite;
            box-shadow: 0 0 4px var(--accent-ice);
        }

        @keyframes float-particle {
            0% { transform: translateY(100vh); opacity: 0; }
            10% { opacity: 0.6; }
            90% { opacity: 0.6; }
            100% { transform: translateY(-100px); opacity: 0; }
        }

        /* Typography */
        h1, h2, h3, h4, h5 { font-family: 'Cinzel', serif; font-weight: 600; letter-spacing: 0.05em; }

        .title-frost {
            background: linear-gradient(135deg, var(--accent-frost) 0%, #ffffff 50%, var(--accent-ice) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Navigation */
        .navbar-custom {
            background: rgba(10, 13, 20, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-frost);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-family: 'Cinzel', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary) !important;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--accent-ice), var(--accent-frost));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 20px rgba(79, 195, 247, 0.4);
        }

        .nav-link {
            color: var(--text-muted) !important;
            font-weight: 500;
            padding: 0.5rem 1.25rem !important;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--accent-ice) !important;
            background: rgba(79, 195, 247, 0.1);
        }

        /* Buttons */
        .btn-frost {
            background: linear-gradient(135deg, var(--accent-ice), var(--accent-frost));
            color: var(--bg-primary);
            font-weight: 600;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(79, 195, 247, 0.3);
            text-decoration: none;
            display: inline-block;
        }

        .btn-frost:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(79, 195, 247, 0.5);
            color: var(--bg-primary);
            text-decoration: none;
        }

        .btn-outline-frost {
            background: transparent;
            color: var(--accent-ice);
            border: 1px solid var(--border-frost);
            padding: 0.75rem 2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-outline-frost:hover {
            background: rgba(79, 195, 247, 0.1);
            border-color: var(--accent-ice);
            color: var(--accent-ice);
            text-decoration: none;
        }

        /* Cards */
        .card-frost {
            background: var(--bg-card);
            border: 1px solid var(--border-frost);
            border-radius: 12px;
            backdrop-filter: blur(10px);
            transition: all 0.4s ease;
        }

        .card-frost:hover {
            border-color: rgba(79, 195, 247, 0.5);
            box-shadow: 0 10px 40px rgba(79, 195, 247, 0.15);
        }

        /* Hero */
        .hero-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 4rem 0;
        }

        .hero-title {
            font-size: clamp(2.5rem, 8vw, 4.5rem);
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-size: 1.15rem;
            color: var(--text-muted);
            max-width: 520px;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        /* Hero Image Styling */
        .hero-image-wrapper {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5), 0 0 40px rgba(79, 195, 247, 0.15);
            border: 1px solid var(--border-frost);
        }

        .hero-image-wrapper::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(10, 13, 20, 0.1) 0%, rgba(10, 13, 20, 0.6) 100%),
                        linear-gradient(90deg, rgba(79, 195, 247, 0.2) 0%, transparent 50%);
            pointer-events: none;
        }

        .hero-image {
            width: 100%;
            height: auto;
            display: block;
            filter: saturate(0.8) contrast(1.1) hue-rotate(10deg);
            transition: transform 10s linear;
        }

        .hero-image-wrapper:hover .hero-image {
            transform: scale(1.05);
        }

        /* Stats bar */
        .stats-bar {
            background: var(--bg-card);
            border: 1px solid var(--border-frost);
            border-radius: 12px;
            padding: 1.5rem 2rem;
            margin: 2rem 0;
        }

        .stat-item {
            text-align: center;
            padding: 0.5rem 1.5rem;
            border-right: 1px solid var(--border-frost);
        }
        .stat-item:last-child { border-right: none; }

        .stat-value {
            font-family: 'Cinzel', serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--accent-ice);
        }

        .stat-label {
            font-size: 0.875rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        /* Feature cards */
        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(79, 195, 247, 0.2), rgba(129, 212, 250, 0.1));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.25rem;
            border: 1px solid var(--border-frost);
        }

        .feature-icon svg { width: 28px; height: 28px; stroke: var(--accent-ice); }

        /* Form styling */
        .form-control-custom {
            background: rgba(17, 24, 39, 0.8);
            border: 1px solid var(--border-frost);
            border-radius: 8px;
            color: var(--text-primary);
            padding: 0.875rem 1rem;
            transition: all 0.3s ease;
        }

        .form-control-custom:focus {
            background: rgba(17, 24, 39, 0.95);
            border-color: var(--accent-ice);
            box-shadow: 0 0 0 3px rgba(79, 195, 247, 0.15);
            color: var(--text-primary);
            outline: none;
        }
        .form-control-custom::placeholder { color: var(--text-muted); }
        .form-label-custom { color: var(--text-primary); font-weight: 500; margin-bottom: 0.5rem; font-size: 0.9rem; }

        /* Password strength */
        .password-strength { height: 4px; border-radius: 2px; background: rgba(255,255,255,0.1); margin-top: 0.5rem; overflow: hidden; }
        .password-strength-bar { height: 100%; border-radius: 2px; transition: all 0.3s ease; width: 0%; }
        .strength-weak { width: 33%; background: #ef4444; }
        .strength-medium { width: 66%; background: #f59e0b; }
        .strength-strong { width: 100%; background: #22c55e; }

        /* Stats page */
        .stats-nav { display: flex; gap: 0.5rem; margin-bottom: 2rem; flex-wrap: wrap; }
        .stats-nav-btn {
            padding: 0.625rem 1.25rem;
            background: transparent;
            border: 1px solid var(--border-frost);
            color: var(--text-muted);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }
        .stats-nav-btn:hover, .stats-nav-btn.active { background: rgba(79, 195, 247, 0.1); border-color: var(--accent-ice); color: var(--accent-ice); }

        .faction-bar { height: 12px; border-radius: 6px; background: var(--alliance-blue); position: relative; overflow: hidden; }
        .faction-bar-horde { position: absolute; right: 0; top: 0; height: 100%; background: var(--horde-red); border-radius: 0 6px 6px 0; }

        /* Leaderboard */
        .leaderboard-row {
            display: flex;
            align-items: center;
            padding: 1rem 1.25rem;
            border-bottom: 1px solid var(--border-frost);
            transition: background 0.3s ease;
        }
        .leaderboard-row:last-child { border-bottom: none; }
        .leaderboard-row:hover { background: rgba(79, 195, 247, 0.05); }

        .rank-badge { width: 32px; height: 32px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.875rem; margin-right: 1rem; flex-shrink: 0; }
        .rank-1 { background: linear-gradient(135deg, #ffd54f, #ffb300); color: #000; }
        .rank-2 { background: linear-gradient(135deg, #b0bec5, #78909c); color: #000; }
        .rank-3 { background: linear-gradient(135deg, #a1887f, #8d6e63); color: #fff; }
        .rank-default { background: rgba(255,255,255,0.1); color: var(--text-muted); }

        .class-icon { width: 28px; height: 28px; border-radius: 4px; margin-right: 0.75rem; flex-shrink: 0; }
        .class-warrior { background: #c79c6e; }
        .class-paladin { background: #f58cba; }
        .class-hunter { background: #abd473; }
        .class-rogue { background: #fff569; }
        .class-priest { background: #ffffff; }
        .class-deathknight { background: #c41f7b; }
        .class-shaman { background: #0070de; }
        .class-mage { background: #69ccf0; }
        .class-warlock { background: #9482c9; }
        .class-druid { background: #ff7d0a; }

        /* Scroll reveal */
        .reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.6s ease, transform 0.6s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }

        footer { background: rgba(10, 13, 20, 0.95); border-top: 1px solid var(--border-frost); padding: 3rem 0 2rem; margin-top: 4rem; }

        @media (max-width: 768px) {
            .stat-item { border-right: none; border-bottom: 1px solid var(--border-frost); padding: 1rem; }
            .stat-item:last-child { border-bottom: none; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
        }
    </style>
</head>
<body>
    <!-- Background -->
    <div class="bg-atmosphere"></div>
    <div class="frost-particles" id="particles"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="brand-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0a0d14" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                </div>
                Frostcrown
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <line x1="3" y1="12" x2="21" y2="12"/>
                    <line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-1">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('statistics') ? 'active' : '' }}" href="{{ route('statistics') }}">Statistics</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-5 mt-5">
        @yield('content')
    </main>

    <footer>
        <div class="container text-center">
            <p class="text-muted">Frostcrown Server &copy; 2023. World of Warcraft is a trademark of Blizzard Entertainment.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Particles
        const pContainer = document.getElementById('particles');
        for(let i=0; i<30; i++) {
            const p = document.createElement('div');
            p.className = 'particle';
            p.style.left = Math.random() * 100 + '%';
            p.style.animationDelay = Math.random() * 20 + 's';
            pContainer.appendChild(p);
        }

        // Reveal Observer
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
        }, {threshold: 0.1});

        document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

        // Password Strength
        const passInput = document.getElementById('password');
        const strBar = document.getElementById('strengthBar');
        if(passInput && strBar) {
            passInput.addEventListener('input', () => {
                let s = 0;
                if(passInput.value.length >= 6) s++;
                if(passInput.value.length >= 8) s++;
                if(/[A-Z]/.test(passInput.value)) s++;
                strBar.className = 'password-strength-bar';
                if(s <= 1) strBar.classList.add('strength-weak');
                else if(s <= 2) strBar.classList.add('strength-medium');
                else strBar.classList.add('strength-strong');
            });
        }

        // Stats Tabs
        const statsBtns = document.querySelectorAll('.stats-nav-btn');
        const tabs = document.querySelectorAll('.stats-tab');

        statsBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                statsBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                tabs.forEach(t => t.style.display = 'none');
                document.getElementById('tab-' + btn.dataset.statsTab).style.display = 'block';
            });
        });

        // Counter
        const counter = document.getElementById('online-count');
        if(counter) {
            let c = 0;
            const tgt = 347;
            const int = setInterval(() => {
                c += 10;
                if(c >= tgt) { c = tgt; clearInterval(int); }
                counter.textContent = c;
            }, 30);
        }
    </script>
    @yield('scripts')
</body>
</html>

