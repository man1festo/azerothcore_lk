@extends('layouts.app')

@section('title', 'Frostcrown - Statistics')

@section('content')
    <section>
        <div class="container py-5">
            <h1 class="text-center mb-5 title-frost reveal">Server Statistics</h1>

            <div class="stats-nav reveal">
                <button class="stats-nav-btn active" data-stats-tab="overview">Overview</button>
                <button class="stats-nav-btn" data-stats-tab="players">Top Players</button>
                <button class="stats-nav-btn" data-stats-tab="guilds">Guilds</button>
                <button class="stats-nav-btn" data-stats-tab="pvp">PvP</button>
            </div>

            <div id="tab-overview" class="stats-tab">
                <div class="row g-4">
                    <div class="col-lg-6 reveal">
                        <div class="card-frost p-4">
                            <h5 class="mb-4">Faction Balance</h5>
                            <div class="faction-bar mb-3"><div class="faction-bar-horde" style="width: 47%;"></div></div>
                            <div class="d-flex justify-content-between">
                                <div><span style="color: var(--alliance-blue);">Alliance</span><strong class="d-block">53%</strong></div>
                                <div class="text-end"><span style="color: var(--horde-red);">Horde</span><strong class="d-block">47%</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 reveal">
                        <div class="card-frost p-4">
                            <h5 class="mb-4">Activity (24h)</h5>
                            <div class="d-flex align-items-end gap-2" style="height: 100px;">
                                <div class="flex-fill rounded" style="height: 60%; background: var(--accent-ice); opacity: 0.5;"></div>
                                <div class="flex-fill rounded" style="height: 80%; background: var(--accent-ice); opacity: 0.7;"></div>
                                <div class="flex-fill rounded" style="height: 90%; background: var(--accent-ice);"></div>
                                <div class="flex-fill rounded" style="height: 40%; background: var(--accent-ice); opacity: 0.4;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-players" class="stats-tab" style="display: none;">
                <div class="card-frost overflow-hidden reveal">
                    <div class="leaderboard-row">
                        <div class="rank-badge rank-1">1</div>
                        <div class="class-icon class-paladin"></div>
                        <div class="flex-fill"><strong>Aethelgard</strong><small class="text-muted d-block">Level 80 Paladin</small></div>
                        <div class="text-end"><strong>6,847</strong><small class="text-muted d-block">AP</small></div>
                    </div>
                    <div class="leaderboard-row">
                        <div class="rank-badge rank-2">2</div>
                        <div class="class-icon class-deathknight"></div>
                        <div class="flex-fill"><strong>Frostreaver</strong><small class="text-muted d-block">Level 80 Death Knight</small></div>
                        <div class="text-end"><strong>6,521</strong><small class="text-muted d-block">AP</small></div>
                    </div>
                    <div class="leaderboard-row">
                        <div class="rank-badge rank-3">3</div>
                        <div class="class-icon class-mage"></div>
                        <div class="flex-fill"><strong>Frostbolt</strong><small class="text-muted d-block">Level 80 Mage</small></div>
                        <div class="text-end"><strong>6,213</strong><small class="text-muted d-block">AP</small></div>
                    </div>
                </div>
            </div>

            <div id="tab-guilds" class="stats-tab" style="display: none;">
                <div class="card-frost overflow-hidden reveal">
                    <div class="leaderboard-row">
                        <div class="rank-badge rank-1">1</div>
                        <div class="flex-fill"><strong>Enigma</strong><small class="text-muted d-block">Alliance</small></div>
                        <div class="text-end"><strong>142</strong><small class="text-muted d-block">Members</small></div>
                    </div>
                    <div class="leaderboard-row">
                        <div class="rank-badge rank-2">2</div>
                        <div class="flex-fill"><strong>Frozen Legion</strong><small class="text-muted d-block">Horde</small></div>
                        <div class="text-end"><strong>128</strong><small class="text-muted d-block">Members</small></div>
                    </div>
                    <div class="leaderboard-row">
                        <div class="rank-badge rank-3">3</div>
                        <div class="flex-fill"><strong>Frostborn</strong><small class="text-muted d-block">Alliance</small></div>
                        <div class="text-end"><strong>115</strong><small class="text-muted d-block">Members</small></div>
                    </div>
                </div>
            </div>

            <div id="tab-pvp" class="stats-tab" style="display: none;">
                <div class="card-frost overflow-hidden reveal">
                    <div class="leaderboard-row">
                        <div class="rank-badge rank-1">1</div>
                        <div class="class-icon class-rogue"></div>
                        <div class="flex-fill"><strong>Shadowstepz</strong><small class="text-muted d-block">Rogue</small></div>
                        <div class="text-end"><strong>2,847</strong><small class="text-muted d-block">HKs</small></div>
                    </div>
                    <div class="leaderboard-row">
                        <div class="rank-badge rank-2">2</div>
                        <div class="class-icon class-warrior"></div>
                        <div class="flex-fill"><strong>Slasher</strong><small class="text-muted d-block">Warrior</small></div>
                        <div class="text-end"><strong>2,634</strong><small class="text-muted d-block">HKs</small></div>
                    </div>
                    <div class="leaderboard-row">
                        <div class="rank-badge rank-3">3</div>
                        <div class="class-icon class-deathknight"></div>
                        <div class="flex-fill"><strong>Necrolord</strong><small class="text-muted d-block">Death Knight</small></div>
                        <div class="text-end"><strong>2,421</strong><small class="text-muted d-block">HKs</small></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

