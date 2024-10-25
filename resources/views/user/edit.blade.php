<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/globalstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('css/editprofile.css')}}">
</head>
<body>
    <div class="container">
        <main>
            <div class="profile-card">
                <!-- <div class="profile-header"></div> -->
                <!-- <img src="logo.png" alt="Profile Picture of John Doe" class="profile-img" height="100" width="100"> -->

                <h1 class="name">Edit Profile</h1>
                
                <form action="{{ route('user.update', $user->id) }}" method="POST" class="edit-form" onsubmit="return validateNoteForm()" novalidate>
                    @csrf
                    @method('PUT')
                
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="{{ $user->name }}" required>
                        <small id="userNameError" class="error-message"></small>
                    </div>
                
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}" required>
                        <small id="userEmailError" class="error-message"></small>
                    </div>
                
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea id="bio" name="bio" rows="4" required>{{ $user->bio }}</textarea>
                        <small id="userBioError" class="error-message"></small>
                    </div>
                
                    <div class="form-group">
                        <button type="submit" class="profile-btn" aria-label="Save changes">Save</button>
                    </div>
                </form>
                
                <a href="{{ route('user.show', $user->id) }}" class="link-button">Back</a>
                
    </div>

    <script src="{{asset('js/editprofile.js')}}"></script>
</body>
</html>




{{-- 
hello there this is user edit form <br> 
<a href="{{route('dashboard')}}">return to dashboard</a>
<hr>
<form action="{{ route('user.update', $user) }}" method="POST"> <!-- Use the correct route name -->
    @csrf
    @method('PUT')

    <div>
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required> <!-- Use old() to retain value on validation error -->
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required> <!-- Use old() to retain value on validation error -->
    </div> --}}
    {{-- Uncomment this if you want to allow password updates --}}
    {{-- <div>
        <label>Password:</label>
        <input type="password" name="password">
    </div>
    <div>
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation">
    </div> --}}
    {{-- <button type="submit">Update User</button>
</form>


<form id="edit-form" action="{{ route('user.update', $note->id) }}" method="POST" novalidate>
    @csrf
    @method('PUT')

    <h2>Edit Note</h2>
    
    <div class="input-group">

        <label for="title">Name:</label><br>
        <input type="text" id="title" name="title" value="{{ $user->name }}" required>

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
</form> --}}