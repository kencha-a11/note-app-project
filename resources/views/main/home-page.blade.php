<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Note Application</title>
    <link rel="stylesheet" href="{{asset('css/globalstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
    <div class="wrapper">
        <!-- Navigation -->
        <header>
            <nav class="navbar">
                <div class="nav-container">
                    <div class="hamburger" id="hamburger">&#9776;</div>
                    <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                    <ul class="nav-links">
                        <li><a href="{{route('home-page')}}">Home</a></li>
                        <li><a href="#">Abouts</a></li>
                        <li><a href="{{route('login-form')}}">Login</a></li>
                        <li><a href="{{route('register-form')}}">Register</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Main Section -->
        <main>
            <div class="hero-section">
                <div class="hero-container">
                    <h2>Welcome to NoteApp</h2>
                    <p>Effortlessly organize, create, and manage all your notes in one place.</p>
                    <a href="{{route('login-form')}}" class="btn">Get Started</a>
                </div>
            </div>

            
        </main>

        <section class="features">
                <div class="container">
                    <h3>Key Features</h3>
                    <div class="feature-grid">
                        <div class="feature-item">
                            <h4>Create Notes</h4>
                            <p>Easily create new notes with our user-friendly editor.</p>
                        </div>
                        <div class="feature-item">
                            <h4>Organize</h4>
                            <p>Keep your notes organized with categories and tags.</p>
                        </div>
                        <div class="feature-item">
                            <h4>Access Anywhere</h4>
                            <p>Access your notes from any device, anytime.</p>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <p>&copy; 2024 NoteApp. All Rights Reserved.</p>
            </div>
        </footer>

    </div>
    <script src="{{asset('js/home.js')}}"></script>
</body>
</html>