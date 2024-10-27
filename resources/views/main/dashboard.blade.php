<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">     {{-- updated rendering internet exlorer --}}   
    <link rel="icon" href="{{ asset('assets/img/logo.ico') }}" type="image/x-icon">

    <title>Toggle Sidebar</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/notebox.css')}}">
    <link rel="stylesheet" href="{{asset('css/globalstyle.css')}}">
</head>
<body>
    <div class="header-container">
        <button id="toggle-sidebar-btn" class="toggle-btn">☰</button>
        <img id="logo" src="{{asset('assets/img/logo.png')}}" alt="logo" width="50px" >
        <h1>Dashboard</h1>
    </div>

    <div class="container">
        <nav id="sidebar" class="sidebar">
            <ul>
                <li><a href="{{route('user.show', $user->id)}}">Profile</a></li> <hr>
                <li><a href="{{route('notes.create')}}">Create</a></li> <hr>

                <li>
                    <a href="#" id="searchToggle" onclick="toggleSearch()">Search</a>

                    <form id="searchForm" action="{{ route('note.search', $user) }}" method="POST"> 
                        @csrf
                        <span id="searchContainer" style="display: none;">
                            <input type="text" id="styledInput" name="keyword" placeholder="Search...">
                        </span>

                        <button type="submit" id="magnifier">⌕</button>

                        <style></style>

                    </form>
                    
                </li>
                 <hr>
                
                

                <form action="{{route('logout-post')}}" method="POST">
                    @csrf
                    <button class="logout-btn" type="submit"><li><a>Logout</a></li></button>
                </form>
            </ul>
        </nav>

        <main>
            <header class="main-header" id="header">
                <h1><a href="{{route('dashboard')}}" onclick="return noteHumberger()"><span class="noteHumburger">☰</span>Notes</a></h1> 


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

                <h3><a href="#header">Return</a></h3> 
                <style>
                    h3 a{
                        color: white;
                        text-decoration: none;
                        font-weight: bold;
                    }
                </style>
                <!-- <a href="#header">return <header></header></a> -->
            </header>
            <!-- Right Sidebar -->
        </main>
    </div>

    <script src="{{asset('js/dashboard.js')}}"></script> 

    {{-- <script src="dashboard.js"></script> --}}
</body>
</html>

    

  