<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        return view('owners.index', compact('owners'));
    }

    public function create()
    {
        return view('owners.create');
    }

    public function store(Request $request)
    {
        // Validazione dei dati del form

        $owner = new Owner();
        $owner->name = $request->input('name');
        $owner->email = $request->input('email');
        $owner->save();

        return redirect()->route('owners.index')->with('success', 'Owner created successfully');
    }

    public function show($id)
    {
        $owner = Owner::find($id);
        return view('owners.show', compact('owner'));
    }

    public function edit($id)
    {
        $owner = Owner::find($id);
        return view('owners.edit', compact('owner'));
    }

    public function update(Request $request, $id)
    {
        // Validazione dei dati del form

        $owner = Owner::find($id);
        $owner->name = $request->input('name');
        $owner->email = $request->input('email');
        $owner->save();

        return redirect()->route('owners.index')->with('success', 'Owner updated successfully');
    }

    public function destroy($id)
    {
        $owner = Owner::find($id);
        $owner->delete();

        return redirect()->route('owners.index')->with('success', 'Owner deleted successfully');
    }
}
