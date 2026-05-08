@extends('layouts.app')

@section('title', $character->name . ' - Frostcrown')
@section('content')
    <!-- Character Header -->
    <section class="py-5">
        <div class="container">
            <div class="card-frost p-5 reveal">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h1 class="title-frost mb-3">{{ $character->name }}</h1>
                        <div class="d-flex gap-3 flex-wrap">
                            <span class="badge bg-primary">Level {{ $character->level ?? 1 }}</span>
                            <span class="badge bg-info">{{ ucfirst($character->class ?? 'Unknown') }}</span>
                            <span class="badge bg-warning">{{ ucfirst($character->race ?? 'Unknown') }}</span>
                            @if($character->realm)
                                <span class="badge bg-secondary">{{ $character->realm->name }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ url('/characters') }}" class="btn btn-outline-frost">
                            ← Back to Characters
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Character Details -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Main Stats -->
                <div class="col-lg-8">
                    <div class="card-frost p-4 mb-4 reveal">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="title-frost mb-0">Character Information</h4>
                            <button type="button" class="btn btn-sm btn-outline-frost" id="editBtn">
                                Edit
                            </button>
                        </div>

                        <form id="characterForm">
                            @csrf
                            @method('PUT')
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label-custom">Level</label>
                                        <input type="number" name="level" class="form-control-custom" value="{{ $character->level ?? 10 }}" min="1" max="80" disabled>{{$character->level}}
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label-custom">Class</label>
                                        <input type="text" name="class" class="form-control-custom" value="{{ $character->class ?? 'Unknown' }}" disabled>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label-custom">Race</label>
                                        <input type="text" name="race" class="form-control-custom" value="{{ $character->race ?? 'Unknown' }}" disabled>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label-custom">Gender</label>
                                        <select name="gender" class="form-control-custom form-select" disabled>
                                            <option value="Male" {{ ($character->gender ?? 'Male') === 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ ($character->gender ?? 'Male') === 'Female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label-custom">Faction</label>
                                        <input type="text" name="faction" class="form-control-custom" value="{{ $character->faction ?? 'Unknown' }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label-custom">Specialization</label>
                                        <input type="text" name="spec" class="form-control-custom" value="{{ $character->spec ?? 'Unknown' }}" disabled>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label-custom">Guild</label>
                                        <input type="text" name="guild" class="form-control-custom" value="{{ $character->guild ?? '' }}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-4 mt-2">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label-custom">Achievement Points</label>
                                        <input type="number" name="achievementPoints" class="form-control-custom" value="{{ $character->achievementPoints ?? 0 }}" min="0" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label-custom">Status</label>
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="online" id="onlineCheck" value="1" {{ ($character->online ?? false) ? 'checked' : '' }} disabled>
                                                <label class="form-check-label" for="onlineCheck">
                                                    Online
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none" id="actionButtons">
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-frost">
                                        Save Changes
                                    </button>
                                    <button type="button" class="btn btn-outline-frost" id="cancelBtn">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Stats -->

                </div>

                <!-- Sidebar Info -->
                <div class="col-lg-4">
                    <!-- Quick Info -->
                    <div class="card-frost p-4 mb-4 reveal">
                        <h5 class="title-frost mb-3">Quick Info</h5>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <small class="text-muted d-block mb-1">Level</small>
                                <strong>{{ $character->level ?? 1 }}</strong>
                            </div>
                            <div>
                                <small class="text-muted d-block mb-1">Class</small>
                                <strong>{{ ucfirst($character->class ?? 'Unknown') }}</strong>
                            </div>
                            <div>
                                <small class="text-muted d-block mb-1">Race</small>
                                <strong>{{ ucfirst($character->race ?? 'Unknown') }}</strong>
                            </div>
                            <div>
                                <small class="text-muted d-block mb-1">Created</small>
                                <strong>{{ $character->created_at?->format('M d, Y') ?? 'Unknown' }}</strong>
                            </div>
                            <div>
                                <small class="text-muted d-block mb-1">Last Updated</small>
                                <strong>{{ $character->updated_at?->format('M d, Y H:i') ?? 'Unknown' }}</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Realm Info -->
                    @if($character->realm)
                        <div class="card-frost p-4 reveal">
                            <h5 class="title-frost mb-3">Realm</h5>
                            <div>
                                <small class="text-muted d-block mb-1">Name</small>
                                <strong>{{ $character->realm->name }}</strong>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Details Section -->
    @if($character->guild || $character->achievementPoints)
        <section class="py-5" style="background: rgba(79, 195, 247, 0.05);">
            <div class="container">
                <div class="card-frost p-4 reveal">
                    <h4 class="title-frost mb-4">Additional Information</h4>
                    <div class="row g-4">
                        @if($character->guild)
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="feature-icon me-3">
                                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Guild</small>
                                        <strong>{{ $character->guild }}</strong>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($character->achievementPoints)
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="feature-icon me-3">
                                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Achievement Points</small>
                                        <strong>{{ number_format($character->achievementPoints) }} pts</strong>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Navigation Links -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex gap-3 justify-content-center reveal flex-wrap">
                <a href="{{ url('/characters') }}" class="btn btn-outline-frost">
                    Browse All Characters
                </a>
                <a href="{{ url('/') }}" class="btn btn-outline-frost">
                    Back to Home
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <style>
        .stat-box {
            padding: 1rem;
            background: rgba(79, 195, 247, 0.05);
            border-radius: 8px;
            border: 1px solid rgba(79, 195, 247, 0.1);
        }

        .stat-label {
            font-size: 0.875rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 600;
            font-family: 'Cinzel', serif;
        }

        .feature-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, rgba(79, 195, 247, 0.2), rgba(129, 212, 250, 0.1));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border-frost);
            flex-shrink: 0;
        }

        .feature-icon svg {
            width: 24px;
            height: 24px;
            stroke: var(--accent-ice);
        }

        .form-select {
            background-color: rgba(17, 24, 39, 0.8);
            border: 1px solid var(--border-frost);
            border-radius: 8px;
            color: var(--text-primary);
            padding: 0.875rem 1rem;
            transition: all 0.3s ease;
        }

        .form-select:focus {
            background-color: rgba(17, 24, 39, 0.95);
            border-color: var(--accent-ice);
            box-shadow: 0 0 0 3px rgba(79, 195, 247, 0.15);
            color: var(--text-primary);
            outline: none;
        }

        .form-select:disabled {
            opacity: 1;
            background-color: rgba(17, 24, 39, 0.5);
            color: var(--text-muted);
        }

        .form-check-input {
            width: 1.25rem;
            height: 1.25rem;
            margin-top: 0.3125rem;
            vertical-align: top;
            appearance: none;
            background-color: rgba(17, 24, 39, 0.8);
            border: 1px solid var(--border-frost);
            border-radius: 0.25rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: var(--accent-ice);
            border-color: var(--accent-ice);
        }

        .form-check-input:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .alert-message {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            animation: fadeIn 0.3s ease;
        }

        .alert-success {
            background-color: rgba(34, 197, 94, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.3);
            color: #22c55e;
        }

        .alert-error {
            background-color: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .loading-spinner {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            border: 2px solid rgba(79, 195, 247, 0.3);
            border-top-color: var(--accent-ice);
            border-radius: 50%;
            animation: spin 0.6s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editBtn = document.getElementById('editBtn');
            const cancelBtn = document.getElementById('cancelBtn');
            const characterForm = document.getElementById('characterForm');
            const actionButtons = document.getElementById('actionButtons');
            const formFields = characterForm.querySelectorAll('input, select, textarea');
            const characterId = {{ $character->id }};

            // Edit button click
            editBtn.addEventListener('click', function() {
                formFields.forEach(field => field.disabled = false);
                actionButtons.classList.remove('d-none');
                editBtn.classList.add('d-none');
            });

            // Cancel button click
            cancelBtn.addEventListener('click', function() {
                formFields.forEach(field => field.disabled = true);
                actionButtons.classList.add('d-none');
                editBtn.classList.remove('d-none');
                characterForm.reset();
            });

            // Form submission via AJAX
            characterForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(characterForm);
                const submitBtn = characterForm.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;

                // Show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="loading-spinner"></span> Saving...';

                fetch(`/admin/characters/${characterId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json',
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    showMessage('Character updated successfully!', 'success');

                    // Reset form and UI
                    setTimeout(() => {
                        formFields.forEach(field => field.disabled = true);
                        actionButtons.classList.add('d-none');
                        editBtn.classList.remove('d-none');
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    }, 1500);
                })
                .catch(error => {
                    console.error('Error:', error);
                    showMessage('An error occurred while saving. Please try again.', 'error');
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                });
            });

            // Show message function
            function showMessage(message, type) {
                const messageDiv = document.createElement('div');
                messageDiv.className = `alert-message alert-${type}`;
                messageDiv.textContent = message;

                const cardHeader = characterForm.closest('.card-frost');
                cardHeader.insertBefore(messageDiv, cardHeader.firstChild);

                setTimeout(() => {
                    messageDiv.remove();
                }, 4000);
            }
        });
    </script>
@endsection




