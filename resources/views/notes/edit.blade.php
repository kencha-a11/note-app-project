<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">     {{-- updated rendering internet exlorer --}}   
    <link rel="icon" href="{{ asset('assets/img/logo.ico') }}" type="image/x-icon">
    <title>Edit Note</title>
    <link rel="stylesheet" href="{{asset('css/globalstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/editnote.css')}}">
</head>
<body>
    <div class="main-container">
       <div class="note-container">

        <form id="dashboard.html" class="note-form" action="{{ route('notes.update', $note->id) }}" method="POST" onsubmit="return validateNoteForm()" novalidate>
            @csrf
            @method('PUT')

            <h2>Edit Note</h2>
            
            <div class="input-group">

                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" value="{{ $note->title }}" required>

                <small id="noteTitleError" class="error-message"></small>
            </div>
            
            <div class="input-group">
                
                <label for="description">Note Description</label>
                <input type="text" id="description" name="description" value="{{ $note->description }}" required>

                <small id="noteDescriptionError" class="error-message"></small>
            </div>
            
            <div class="input-group">

                <label for="content">Note Content</label>
                <textarea id="content" name="content" rows="10" required>{{ $note->content }}</textarea>

                <small id="noteContentError" class="error-message"></small>
            </div>

            <button type="submit" class="note-btn">Save Note</button>
        </form>

        <form id="deleteForm" class="note-form" action="{{ route('notes.destroy', $note->id) }}" method="POST" novalidate>
            @csrf
            @method('DELETE')
            <button type="button" class="note-btn" onclick="deleteNote()">Delete Note</button>
        </form>
        

<a href="{{route('notes.show', $note)}}" class="link-button">Back</a>
</div>
</div>
<script src="{{asset('js/editnote.js')}}"></script>

</body>
</html>



{{-- <h1>Edit Note</h1> <br>
<form action="{{ route('notes.update', $note->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- This ensures it's a PUT request -->

    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" value="{{ $note->title }}" required><br><br>

    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" value="{{ $note->description }}" required><br><br>

    <label for="content">Content:</label><br>
    <textarea id="content" name="content" rows="10" cols="30" required>{{ $note->content }}</textarea><br><br>

    <input type="submit" value="Update Note">
</form> <br>

<form action="{{ route('notes.destroy', $note->id) }}" method="POST">
    @csrf
    @method('DELETE') <!-- Method override for DELETE request -->

    <button type="submit" onclick="return confirm('Are you sure you want to delete this note?')">Delete Note</button>
</form>
<hr>


<a href="{{route('home-page')}}">home</a> <br>
<a href="{{route('login-form')}}">login</a> <br>
<a href="{{route('register-form')}}">register</a> <br>
<a href="{{route('dashboard')}}">dashboard</a> --}}