<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Sidebar</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/notebox.css')}}">
    <link rel="stylesheet" href="{{asset('css/globalstyle.css')}}">

</head>
<body>
    <div class="header-container">
        <button id="toggle-sidebar-btn" class="toggle-btn">☰</button>
        <img src="{{asset('assets/img/logo.png')}}" alt="logo" width="50px" >
        <h1>Dashboard</h1>
    </div>

    <div class="container">
        <nav id="sidebar" class="sidebar">
            <ul>
                <li><a href="{{route('user.show', $user->id)}}">Profile</a></li> <hr>
                <li><a href="{{route('notes.create')}}">Create</a></li> <hr>
                <li><a href="#">Search</a></li> <hr>
                

                <form action="{{route('logout-post')}}" method="POST">
                    @csrf
                    <button class="logout-btn" type="submit"><li><a>Logout</a></li></button>
                </form>
            </ul>
        </nav>

        <main>
            <header class="main-header" id="header">
                <h1>Notes</h1> 
                <hr>
                    <div class="main-container">
                        <div class="main-content">
                            <div class="box-container">
                                @foreach ($notes as $note)
                                    <a href="{{route('notes.show', $note->id)}}" class="note-box">
                                        <h2>{{$note->title}}</h2>
                                        <!-- <h3>Description</h3> -->
                                        <p>{{$note->description}}</p>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                <hr>
                <!-- <a href="#header">return <header></header></a> -->
            </header>
            <!-- Right Sidebar -->
        </main>
    </div>

    <script src="{{asset('js/dashboard.js')}}"></script>
</body>
</html>


{{-- -=--===-=-=-=-=-=-=-=-=-=-=-=-==-=-==- --}}
{{-- <br><br><hr> <hr>
{{$user}}
<hr><hr>

"id":1, {{$user->id}}<br>
"name":"jon", {{$user->name}} <br>
"email":"jon@jon", {{$user->email}}<br>
"email_verified_at":null, {{$user->email_verified_at}}<br>
"created_at":"2024-10-23T06:39:26.000000Z", {{$user->created_at}}<br>
"updated_at":"2024-10-23T06:39:26.000000Z", {{$user->updated_at}}<br> <br>

<a href="{{route('user.show', $user->id)}}">show profile</a> <br>
<a href="{{route('notes.create')}}">create note</a> <br>

<br>
<hr><hr>

@foreach ($notes as $note)
"id":{{$note->id}} <br>
"user_id": {{$note->user_id}} <br>
"title": {{$note->title}} <br>
"description": {{$note->description}} <br>
"content": {{$note->content}} <br>
"created_at": {{$note->created_at}} <br>
"updated_at": {{$note->updated_at}} <br> <br>

<a href="{{route('notes.show', $note->id)}}">show note</a> <br>

<hr>    
@endforeach


@foreach ($notes as $note)
    <a href="viewnote.html" class="note-box">
    <h2>{{$note->title}}</h2>
    <!-- <h3>Description</h3> -->
    <p>{{$note->description}}</p>
</a>
@endforeach


<form action="{{route('logout-post')}}" method="POST">
    @csrf
    <button type="submit">logout</button>
</form>


<a href="{{route('login-form')}}">login</a> <br>
<a href="{{route('register-form')}}">register</a> <br>
<a href="{{route('dashboard')}}">dashboard</a> --}}