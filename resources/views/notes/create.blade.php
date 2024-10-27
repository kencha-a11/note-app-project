<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">     {{-- updated rendering internet exlorer --}}   
    <link rel="icon" href="{{ asset('assets/img/logo.ico') }}" type="image/x-icon">
    <title>Create Note</title>
    <link rel="stylesheet" href="{{asset('css/globalstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/createnote.css')}}">
</head>
<body>
    <div class="main-container">
       <div class="note-container">
        <form id="dashboard.html" class="note-form" action="{{ route('notes.store') }}" method="POST" onsubmit="return validateNoteForm()" novalidate>
            @csrf
            <h2>Create Note</h2>
        
            <div class="input-group">
                <label for="title">Note Title</label>
                <input type="text" id="title" name="title" placeholder="Enter the note title" required>
                <small id="noteTitleError" class="error-message"></small>
            </div>
        
            <div class="input-group">
                <label for="description">Note Description</label>
                <input type="text" id="description" name="description" placeholder="Enter the note description" required>
                <small id="noteDescriptionError" class="error-message"></small>
            </div>
        
            <div class="input-group">
                <label for="content">Note Content</label>
                <textarea id="content" name="content" rows="10" placeholder="Write your note here..." required></textarea>
                <small id="noteContentError" class="error-message"></small>
            </div>
        
            <button type="submit" class="note-btn">Create Note</button>
        </form>
        
        <a href="{{route('dashboard')}}" class="link-button">Back</a>
    </div>
    </div>
    <script src="{{asset('js/createnote.js')}}"></script>

</body>
</html>





{{-- 
<h1>Create Note</h1> <br>

<form action="{{ route('notes.store') }}" method="POST">
    @csrf

    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" required><br><br>

    <label for="content">Content:</label><br>
    <textarea id="content" name="content" rows="10" cols="30" required></textarea><br><br>

    <input type="submit" value="Create Note">
</form>
<hr>

<a href="{{route('home-page')}}">home</a> <br>
<a href="{{route('login-form')}}">login</a> <br>
<a href="{{route('register-form')}}">register</a> <br>
<a href="{{route('dashboard')}}">dashboard</a> --}}