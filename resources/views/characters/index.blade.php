@extends('layouts.app')

@section('title', 'Characters - Frostcrown')

@section('content')
    <!-- Header Section -->
    <section class="py-5">
        <div class="container">
            <h1 class="title-frost reveal mb-2">Characters</h1>
            <p class="text-muted reveal">Browse all characters on the server</p>
        </div>
    </section>

    <!-- Characters Section -->
    <section class="py-5">
        <div class="container">
            @if($characters && $characters->count() > 0)
                <div class="row g-4">
                    @foreach($characters as $character)
                        <div class="col-md-6 col-lg-4 reveal">
                            <div class="card-frost h-100 overflow-hidden">
                                <!-- Character Header -->
                                <div class="p-4 border-bottom" style="border-color: rgba(79, 195, 247, 0.25);">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div>
                                            <h5 class="mb-1">{{ $character->name }}</h5>
                                            <p class="text-muted mb-0 small">
                                                Level {{ $character->level ?? 1 }} - {{ ucfirst($character->class ?? 'Unknown') }}
                                            </p>
                                        </div>
                                        <span class="badge bg-primary text-white">
                                            {{ ucfirst($character->race ?? 'Unknown') }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Character Stats -->
                                <div class="p-4">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <div class="text-muted small mb-1">Realm</div>
                                            <p class="mb-0">
                                                @if($character->realm)
                                                    {{ $character->realm->name ?? 'Unknown' }}
                                                @else
                                                    Unknown
                                                @endif
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-muted small mb-1">Experience</div>
                                            <p class="mb-0">{{ number_format($character->experience ?? 0) }}</p>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-muted small mb-1">Health</div>
                                            <p class="mb-0">{{ number_format($character->health ?? 0) }}</p>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-muted small mb-1">Mana</div>
                                            <p class="mb-0">{{ number_format($character->mana ?? 0) }}</p>
                                        </div>
                                    </div>

                                    <!-- Character Gender and Status -->
                                    <div class="mt-4 pt-4" style="border-top: 1px solid rgba(79, 195, 247, 0.25);">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <span class="badge bg-secondary">
                                                    {{ ucfirst($character->gender ?? 'Unknown') }}
                                                </span>
                                            </div>
                                            <div class="col-6 text-end">
                                                @if($character->online ?? false)
                                                    <span class="badge bg-success">Online</span>
                                                @else
                                                    <span class="badge bg-danger">Offline</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="p-4" style="border-top: 1px solid rgba(79, 195, 247, 0.25);">
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-outline-frost flex-grow-1 small">
                                            View Profile
                                        </a>
                                        <form action="{{ route('characters.destroy', $character) }}" method="POST" style="display: inline;" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger small" onclick="return confirm('Are you sure you want to delete this character?');">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="card-frost p-5 text-center reveal">
                    <p class="text-muted mb-0">No characters found.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Server Stats -->
    @if($characters && $characters->count() > 0)
        <section class="py-5" style="background: rgba(79, 195, 247, 0.05); margin-top: 3rem;">
            <div class="container">
                <div class="card-frost p-5 reveal">
                    <h3 class="text-center mb-4 title-frost">Server Statistics</h3>
                    <div class="row text-center">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="stat-value" style="color: var(--accent-ice);">{{ $characters->count() }}</div>
                            <div class="stat-label">Total Characters</div>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="stat-value" style="color: var(--accent-ice);">
                                {{ $characters->where('online', true)->count() }}
                            </div>
                            <div class="stat-label">Online Characters</div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-value" style="color: var(--accent-ice);">
                                {{ $characters->avg('level') ? number_format($characters->avg('level'), 1) : 0 }}
                            </div>
                            <div class="stat-label">Average Level</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection


