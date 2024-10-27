<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Note</title>
    <link rel="stylesheet" href="{{asset('css/globalstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/viewnote.css')}}">
</head>
<body>
    <div class="view-container">
        <div class="note-container">
            <h1 class="note-title">View Note</h1>
    
            <div class="note-details">
                <h2>Title:</h2>
                <p class="note-field">{{$note->title}}</p> <br>
    
                <h2>Description:</h2>
                <p class="note-field">{{$note->description}}</p> <br> 
    
                <h2>Content:</h2>
                <div class="scrollable-container">
                    <p class="note-field">{{$note->content}} </p> <br>
                </div>

                <h2>History</h2>
                <div class="scrollable-container">
                    <p class="note-field">updated: {{$note->updated_at}} </p> <br>

                    <p class="note-field">created: {{$note->created_at}} </p> <br>
                </div>
            </div>
    
            <div class="note-actions">
                <a href="{{route('dashboard')}}"><button class="btn back-btn">Back</button></a>
                <a href="{{route('notes.edit', $note->id)}}"><button class="btn edit-btn">Edit</button></a>
            </div>
        </div>
    </div>
</body>
</html>





{{-- -=-====-=-=-==-=-==-=-=-=-=-=-=-=-=-=-= --}}
{{-- show note <br>
<a href="{{route('dashboard')}}">return dashboard</a>
<hr>
note id: {{$note->id}} <br>
user id: {{$note->user_id}} <br>
title: {{$note->title}} <br>
description: {{$note->description}} <br>
content: {{$note->content}} <br>
created at: {{$note->created_at}} <br> 
updated at: {{$note->updated_at}} <br> <hr>

<a href="{{route('notes.edit', $note->id)}}">edit note</a> <br> <hr>

<a href="{{route('home-page')}}">home</a> <br>
<a href="{{route('login-form')}}">login</a> <br>
<a href="{{route('register-form')}}">register</a> <br>
<a href="{{route('dashboard')}}">dashboard</a> --}}