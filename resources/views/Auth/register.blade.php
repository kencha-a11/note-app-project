
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">     {{-- updated rendering internet exlorer --}}   
    <link rel="icon" href="{{ asset('assets/img/logo.ico') }}" type="image/x-icon">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/globalstyle.css')}}">
</head>
<body>
    <div class="register-wrapper">
        <div class="register-container">

            <form id="registerForm" class="register-form" action="{{ route('register-post') }}" method="POST" onsubmit="return validateForm()" novalidate>
                @csrf
                <h2>Register</h2>
                <div class="input-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                    <small id="nameError" class="error-message"></small>
                </div>
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
                <div class="input-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm your password" required>
                    <small id="confirmPasswordError" class="error-message"></small>
                </div>
                <button type="submit" class="register-btn">Register</button>
            
                <p class="login-link">Already have an account? <a href="{{route('login-form')}}">Login</a></p>
                <p class="login-link"><a href="{{route('home-page')}}">Return home</a></p>
            </form>
            
        </div>
    </div>
    <script src="{{asset('js/register.js')}}"></script>
</body>
</html>

{{-- 
<form action="{{ route('register-post') }}" method="POST">
    @csrf
    <h2>Register</h2>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required> <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" required><br><br>

        <button type="submit">Register</button>
</form>

<a href="{{route('home-page')}}">home</a> <br>
<a href="{{route('login-form')}}">login</a> <br>
<a href="{{route('register-form')}}">register</a> <br> --}}