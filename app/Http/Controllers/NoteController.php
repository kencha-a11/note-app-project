<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class NoteController extends Controller
{
    use AuthorizesRequests;
    // public function index()
    // {
    //     $user = Auth::user();

    // // Check if the user is authenticated
    // if ($user) {
    //     // Retrieve the notes for the authenticated user
    //     $notes = $user->notes; // This will get the notes related to the user
        
    //     // You can then pass $notes to a view or process them as needed
    //     return view('dashboard', compact('notes'));
    // }

    // // If not authenticated, handle accordingly (e.g., redirect to login)
    // return redirect()->route('login-form')->with('error', 'Please log in to view your notes.');
    // }

    public function createNote()
    {
        return view('Notes.create');
    }

    public function storeNote(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'content' => 'required|string|max:255',
    ]);

    // Create the note associated with the authenticated user
    //option 0 - workinf
    //Auth::user()->notes()->create($request->only(['title', 'description', 'content']));
    // why what the fact error for notes() and work in notes
    // baka sa extension lang to kairita well defined naman sa model to
    //options 1 - working
    // $note = Note::create(array_merge($request->only(['title', 'description', 'content']), [
    //     'user_id' => Auth::id(),
    // ]));
    //option 2 i working
    $note = new Note($request->only(['title', 'description', 'content']));
    $note->user_id = Auth::id();
    $note->save();
    

    return redirect()->route('dashboard')->with('success', 'Note created successfully.');
}

    

    public function showNote(Note $note)
    {
        return view('notes.show',compact('note'));
    }

    public function editNote(Note $note)
{
    $this->authorize('update', $note);

    return view('notes.edit', compact('note'));
}

    public function updateNote(Request $request, Note $note)
    {
        $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'content'=>'required|string|max:255',
        ]);

        $this->authorize('update', $note);
        
        $note->update($request->all());

        return redirect()->route('notes.show', $note)->with('success', 'Note updated successfully.');
    }

    public function destroyNote(Note $note)
{
    // Authorize the user for this action
    $this->authorize('delete', $note);
    
    // Proceed to delete the note
    $note->delete();
    
    return redirect()->route('dashboard')->with('success', 'Note deleted successfully.');
}
}
