<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Site')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #000;
            padding: 15px 20px;
        }
        .navbar .logo img {
            height: 70px;
            margin-right: 20px;
        }
        .navbar .logo span {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
            transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }
        .nav-links li {
            margin: 0;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 15px;
        }
        .nav-links a:hover {
            color:rgb(125, 0, 131);
        }
        .menu-icon {
            display: none;
            font-size: 28px;
            color: white;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .menu-icon.rotate {
            transform: rotate(90deg);
        }
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .profile-text {
            max-width: 600px;
        }
        @media screen and (max-width: 768px) {
            .nav-links {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 90px;
                left: 0;
                width: 100%;
                background-color: #000;
                padding: 10px 0;
                max-height: 0;
                opacity: 0;
                overflow: hidden;
            }
            .nav-links.show {
                max-height: 500px;
                opacity: 1;
            }
            .nav-links li {
                text-align: center;
                padding: 10px;
                border-top: 1px solid #555;
            }
            .menu-icon {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
        <a href="{{ route('home') }}">
        <img src="\build\assets\pic\S.png" alt="Logo">
        </a>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('product') }}">Product</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
        </ul>
        <div class="menu-icon" onclick="toggleMenu()">☰</div>
    </nav>

    <!-- Content Section -->
    <div class="container">
        @yield('content')
    </div>

    <script>
    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        const menuIcon = document.querySelector('.menu-icon');

        navLinks.classList.toggle('show');
        menuIcon.classList.toggle('rotate');
    }
    </script>

</body>
</html>
