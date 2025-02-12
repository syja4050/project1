@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>
    <p>Fill out the form below to get in touch.</p>
    <form action="/submit" method="post">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5"></textarea><br><br>

        <button type="submit">Send</button>
    </form>
@endsection
