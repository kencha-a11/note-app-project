<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function home()
    {
        return view('home-page');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::orderBy('updated_at', 'desc')->get();
        return view('note-list', ['notes'=>$notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'content'=>'required|string|max:10000',
        ]);

        $note = new Note();
        $note->title = $validatedData['title'];
        $note->description = $validatedData['description'];
        $note->content = $validatedData['content'];
        $note->save();
        // Note::create($validatedData);
        
        return redirect()->route('note-list')->with('success','successfully create note');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('note-show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('note-edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $validatedData = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'content'=>'required|string|max:10000',
        ]);

        $note->title = $validatedData['title'];
        $note->description = $validatedData['description'];
        $note->content = $validatedData['content'];
        $note->save();

        return redirect()->route('note-show', $note)->with('success','successfully updated note');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note-list')->with('success','successfully delete note');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        if (empty($searchTerm)) {
            return redirect()->route('note-list');
        }
        $notes = Note::where('title', 'LIKE', '%' . $searchTerm . '%')->get();
        
        if ($notes->isEmpty()){
            $notes = Note::all();
        }
        return view('note-list', compact('notes'));
    }
    
}
