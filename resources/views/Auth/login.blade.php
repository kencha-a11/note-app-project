<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/globalstyle.css')}}">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-container">

            <form id="loginForm" class="login-form" action="{{ route('login-post') }}" method="POST" onsubmit="return validateForm()" novalidate>
                {{-- onsubmit="return validateForm()" --}}
                @csrf
                <h2>Login</h2>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                    <small id="emailError" class="error-message"></small>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                    <small id="passwordError" class="error-message"></small>
                </div>
                <button type="submit" class="login-btn">Login</button>
                <p class="signup-link">Don't have an account? <a href="{{route('register-form')}}">Sign up</a></p>
                {{-- <p class="signup-link"><a href="{{route('dashboard')}}">go to dashboard</a></p> --}}
                <p class="signup-link"><a href="{{route('home-page')}}">return home</a></p>
            </form>
        </div>
    </div>

    <script src="{{asset('js/login.js')}}"></script>
</body>
</html>


{{-- <form id="loginForm" class="login-form" action="{{ route('login-post') }}" method="POST" onsubmit="return validateForm()" novalidate>
    @csrf
    <h2>Register</h2>

    <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <small id="emailError" class="error-message"></small>
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required>
        <small id="passwordError" class="error-message"></small>
    </div>

    <button type="submit" class="register-btn">Register</button>

    <p class="login-link">Already have an account? <a href="{{route('login-form')}}">Login</a></p>
    <p class="login-link"><a href="{{route('home-page')}}">Return home</a></p>
</form> --}}


{{-- <h1>Login</h1> <br>

<form action="{{route('login-post')}}" method="POST">
    @csrf

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Submit">
</form>

<a href="{{route('home-page')}}">home</a> <br>
<a href="{{route('login-form')}}">login</a> <br>
<a href="{{route('register-form')}}">register</a> <br> --}}