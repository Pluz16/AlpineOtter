<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Assicurati di importare il modello Post
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    // Funzione per visualizzare l'elenco dei post
    public function index()
    {
        $posts = Post::all(); // Recupera tutti i post dal database
        return view('posts.index', compact('posts'));
    }

    // Funzione per visualizzare il form di creazione di un nuovo post
    public function create()
    {
        return view('posts.create');
    }

    // Funzione per salvare un nuovo post nel database
    public function store(Request $request)
{
    // Validate the data from the form
    $validatedData = $request->validate([
        'title' => 'required|string',
        'content' => 'required|string',
    ]);

    // Set the user_id to the ID of the authenticated user
    $validatedData['user_id'] = Auth::id();

    // Create the post in the database
    $post = Post::create($validatedData);

    // Redirect to the posts index with a success message
    return redirect()->route('posts.index')->with('success', 'Post created successfully.');
}

    // Funzione per visualizzare un singolo post
    public function show($id)
    {
        $post = Post::findOrFail($id); // Trova il post dal database
        return view('posts.show', compact('post'));
    }

    // Funzione per visualizzare il form di modifica di un post
    public function edit($id)
    {
        $post = Post::findOrFail($id); // Trova il post dal database
        return view('posts.edit', compact('post'));
    }

    // Funzione per aggiornare un post nel database
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id); // Trova il post dal database

        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Aggiorna i dati del post nel database
        $post->update($validatedData);

        // Carica la foto del post se presente
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('post-photos');
            $post->photo = $photoPath;
            $post->save();
        }

        return redirect()->route('posts.index')->with('success', 'Post aggiornato con successo.');
    }

    // Funzione per eliminare un post dal database
    public function destroy($id)
    {
        $post = Post::findOrFail($id); // Trova il post dal database
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post eliminato con successo.');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
