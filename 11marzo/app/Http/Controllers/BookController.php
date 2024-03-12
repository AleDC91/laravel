<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        $booksCat = Category::find(1)->books;

        return view('books.index', ['books' => $books, 'booksCat' => $booksCat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $now = time();
        $currentYear = date('Y', $now);
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author_firstname' => 'required|string|max:255',
            'author_lastname' => 'required|string|max:255',
            'year' => "required|integer|min:1600|max:$currentYear",
            'category_id' => 'required|exists:categories,category_id',
        ]);

        // dd($validatedData);

        $author = Author::where('first_name', $validatedData['author_firstname'])
            ->where('last_name', $validatedData['author_lastname'])
            ->first();


        $book = new Book();


        try {
            // Verifica se l'autore esiste già
            if (!$author) {
                // Se l'autore non esiste, crea un nuovo record
                $author = new Author();
                $author->first_name = $validatedData['author_firstname'];
                $author->last_name = $validatedData['author_lastname'];
                $author->save(); // Salva l'autore nel database
        
                $authorId = $author->author_id;
        
                // Assegna l'ID dell'autore al libro
                $book->author_id = $authorId;
            } else {
                // Se l'autore esiste, usa il suo ID
                $authorId = $author->author_id; // Otteni l'ID dell'autore
                // Trova l'autore utilizzando l'ID
                $author = Author::find($authorId);
                // Assegna l'ID dell'autore al libro
                $book->author_id = $authorId;
            }
        
            // Imposta altri campi del libro
            $book->title = $validatedData['title'];
            $book->year = $validatedData['year'];
            $book->category_id = $validatedData['category_id'];
        
            // Salva il libro nel database
            $book->save();
        
            // Se tutto va bene, esegui le azioni successive
            // Ad esempio, reindirizzamento con messaggio di successo
            return redirect()->route('books.index')->with('success', 'Libro creato con successo!');
        } catch (\Exception $e) {
            // Gestisci eventuali eccezioni qui
            // Ad esempio, puoi registrare l'eccezione o visualizzare un messaggio di errore
            return redirect()->back()->with('error', "Si è verificato un errore durante la creazione del libro: $e");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {

        try {
            $book->delete();
            return redirect()->route('books.index')->with('success', 'Libro eliminato con successo!');
        
        } catch(\Exception $e){
            return redirect()->route('books.index')->with('error', 'Errore nell\'eliminazione del libro!');

        }
    }
}
