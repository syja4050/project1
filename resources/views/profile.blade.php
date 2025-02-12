@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<body>
<div class="profile-container">
        <img class="profile-img" src="/build/assets/pic/ben.png" alt="Profile Picture">
        <div class="profile-text">
            <h1>Sylvain James Carrido</h1>
            <p>A student at Southern Leyte State University currently pursuing BS INFORMATION TECHNOLOGY. I'm passionate about technology.<br>
            I enjoy learning new things, especially in cybersecurity, and I'm always eager to take on new challenges.<br>
            My goal is to be a software engineer and contribute to the tech industry or become a successful entrepreneur.</p>
            <h2>My Hobbies</h2>
            <ul>
                <li>Playing mobile or PC games</li>
                <li>Playing Basketball</li>
            </ul>
        </div>
    </div>
</body>
</html>
@endsection