<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use App\Models\Owner;

class DogController extends Controller
{
    public function index()
    {
        // Logica per ottenere tutti i cani dal database
        $dogs = Dog::all();
        
        // Passa i cani alla vista dogs.index
        return view('dogs.index', compact('dogs'));
    }

    public function create()
{
    $owners = Owner::all();
    return view('dogs.create', compact('owners'));
}


    public function store(Request $request)
{
    // Valida i dati del modulo
    $validatedData = $request->validate([
        'name' => 'required|string',
        'pedigree' => 'required|string',
        'birthdate' => 'required|date',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'owner_id' => 'nullable|exists:owners,id',
        'description' => 'nullable|string',
    ]);

    // Salva il cane nel database
    $dog = Dog::create($validatedData);

    // Carica l'immagine del cane se presente
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('dog-photos');
        $dog->photo = $photoPath;
        $dog->save();
    }

    // Reindirizza all'elenco dei cani con un messaggio di successo
    return redirect()->route('dogs.index')->with('success', 'Cane creato con successo.');
}


public function edit($id)
{
    $dog = Dog::findOrFail($id);
    return view('dogs.edit', compact('dog'));
}

    public function update(Request $request, $id)
    {
        $dog = Dog::findOrFail($id);

        // Validazione dei campi
        $validatedData = $request->validate([
            'name' => 'required|string',
            'pedigree' => 'required|string',
            'birthdate' => 'required|date',
            'photo' => 'nullable|image',
            'owner_id' => 'nullable|exists:owners,id',
            'description' => 'nullable|string',
        ]);

        // Aggiornamento dei campi del cane
        $dog->update($validatedData);

        // Redirezione alla pagina di visualizzazione dei cani o altre azioni
        return redirect()->route('dogs.index')->with('success', 'Cane aggiornato con successo!');
    }

    public function destroy($id)
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();

        // Redirezione alla pagina di visualizzazione dei cani o altre azioni
        return redirect()->route('dogs.index')->with('success', 'Cane eliminato con successo!');
    }
}
