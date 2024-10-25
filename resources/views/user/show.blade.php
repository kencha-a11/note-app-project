<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/globalstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
</head>
<body>
    <div class="container">
        <main>
            <div class="profile-card">
                <div class="profile-header"></div>
                <img src="{{asset('assets/img/logo.png')}}" alt="Profile Picture of John Doe" class="profile-img" height="100" width="100">

                <h1 class="name">{{$user->name}}</h1>
                <h4>Email: <a href="mailto:John@doe.com">{{$user->email}}</a></h4>
                <p class="bio">{{$user->bio}}</p>

                <div class="profile-operation">
                    <div class="operation">
                        <a href="{{route('dashboard')}}">
                            <button class="profile-btn" aria-label="Go back to previous page">Back</button>
                        </a>
                        <a href="{{route('user.edit', $user->id)}}">
                            <button class="profile-btn" aria-label="Edit profile">Edit</button>
                        </a>
                    </div>
                </div>
                
            </div>
        </main>
    </div>
</body>
</html>




{{-- 


Show User Detail <br>
<a href="{{route('dashboard')}}">return dashboard</a>
<hr>

user id: {{$user->id}} <br>
name: {{$user->name}} <br>
email: {{$user->email}} <br>
email verified at: {{$user->email_verified_at}} <br>
created_at: {{$user->created_at}} <br>
updated_at: {{$user->updated_at}} <br>

<a href="{{route('user.edit', $user)}}">edit user</a> <br> <hr>

<a href="{{route('home-page')}}">home</a> <br>
<a href="{{route('login-form')}}">login</a> <br>
<a href="{{route('register-form')}}">register</a> <br>
<a href="{{route('dashboard')}}">dashboard</a> --}}