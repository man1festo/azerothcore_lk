@extends('layouts.app')

@section('title', 'Create Character')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card-frost p-4">
                <h2 class="title-frost mb-4">Create New Character</h2>

                <form action="{{ route('characters.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="user_id" class="form-label-custom">User</label>
                        <select class="form-control-custom" id="user_id" name="user_id" required>
                            <option value="">Select a user</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label-custom">Character Name</label>
                        <input type="text" class="form-control-custom" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="realm_id" class="form-label-custom">Realm</label>
                        <select class="form-control-custom" id="realm_id" name="realm_id" required>
                            <option value="">Select a realm</option>
                            @foreach($realms as $realm)
                                <option value="{{ $realm->id }}">{{ $realm->name }} ({{ $realm->type }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="level" class="form-label-custom">Level</label>
                            <input type="number" class="form-control-custom" id="level" name="level" min="1" max="80" value="1">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="class" class="form-label-custom">Class</label>
                            <select class="form-control-custom" id="class" name="class">
                                <option value="">Select class</option>
                                <option value="Warrior">Warrior</option>
                                <option value="Paladin">Paladin</option>
                                <option value="Hunter">Hunter</option>
                                <option value="Rogue">Rogue</option>
                                <option value="Priest">Priest</option>
                                <option value="Death Knight">Death Knight</option>
                                <option value="Shaman">Shaman</option>
                                <option value="Mage">Mage</option>
                                <option value="Warlock">Warlock</option>
                                <option value="Druid">Druid</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="race" class="form-label-custom">Race</label>
                            <select class="form-control-custom" id="race" name="race">
                                <option value="">Select race</option>
                                <option value="Human">Human</option>
                                <option value="Orc">Orc</option>
                                <option value="Dwarf">Dwarf</option>
                                <option value="Night Elf">Night Elf</option>
                                <option value="Undead">Undead</option>
                                <option value="Tauren">Tauren</option>
                                <option value="Gnome">Gnome</option>
                                <option value="Troll">Troll</option>
                                <option value="Blood Elf">Blood Elf</option>
                                <option value="Draenei">Draenei</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="faction" class="form-label-custom">Faction</label>
                            <select class="form-control-custom" id="faction" name="faction">
                                <option value="">Select faction</option>
                                <option value="Alliance">Alliance</option>
                                <option value="Horde">Horde</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="achievement_points" class="form-label-custom">Achievement Points</label>
                            <input type="number" class="form-control-custom" id="achievement_points" name="achievement_points" min="0" value="0">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="experience" class="form-label-custom">Experience</label>
                            <input type="number" class="form-control-custom" id="experience" name="experience" min="0" value="0">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="guild" class="form-label-custom">Guild</label>
                            <input type="text" class="form-control-custom" id="guild" name="guild">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="spec" class="form-label-custom">Specialization</label>
                            <input type="text" class="form-control-custom" id="spec" name="spec">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label-custom">Gender</label>
                        <select class="form-control-custom" id="gender" name="gender">
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                        </select>
                    </div>

                    <div class="d-flex gap-3">
                        <button type="submit" class="btn-frost">Create Character</button>
                        <a href="{{ route('characters.index') }}" class="btn-outline-frost">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

