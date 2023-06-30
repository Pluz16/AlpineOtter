<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

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
        // Mostra il form per la creazione di un nuovo cane
        return view('dogs.create');
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
        // Trova il cane dal database
        $dog = Dog::findOrFail($id);
        
        // Mostra il form per la modifica del cane
        return view('dogs.edit', compact('dog'));
    }

    public function update(Request $request, $id)
    {
        // Valida i dati del form
        $validatedData = $request->validate([
            'name' => 'required|string',
            'pedigree' => 'required|string',
            'birthdate' => 'required|date',
            // Aggiungi altre validazioni per i campi desiderati
        ]);

        // Trova il cane dal database
        $dog = Dog::findOrFail($id);

        // Aggiorna i dati del cane
        $dog->update($validatedData);

        // Redirect alla pagina di visualizzazione del cane aggiornato
        return redirect()->route('dogs.show', $dog->id);
    }

    public function destroy($id)
    {
        // Trova il cane dal database
        $dog = Dog::findOrFail($id);
        
        // Elimina il cane
        $dog->delete();

        // Redirect alla pagina di elenco dei cani
        return redirect()->route('dogs.index');
    }
}
