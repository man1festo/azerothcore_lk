<?php

namespace App\Http\Controllers;

use App\DTOs\Characters\CharacterCreateData;
use App\DTOs\Characters\CharacterData;
use App\Models\Character;
use App\Services\CharacterService;
use Illuminate\View\View;

class CharactersController extends Controller
{
    public function __construct(private readonly CharacterService $service)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('characters.index', ['characters' => $this->service->getAll()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('characters.create', [
            'users' => \App\Models\User::all(),
            'realms' => \App\Models\Realm::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CharacterCreateData $data)
    {
        $character = $this->service->create($data);
        return redirect()->route('characters.show', ['character' => $character]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('characters.show', ['character' => $character]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CharacterData $dto, Character $character)
    {
        $this->service->update($dto, $character);
        return redirect()->route('characters.show', ['character' => $character]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $this->service->delete($character);
        return redirect()->route('characters.index');
    }
}
