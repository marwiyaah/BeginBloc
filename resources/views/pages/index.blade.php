@extends('layouts.app')

@section('content')

    <style>
        body {
            background: #D5E5E9;
        }
    </style>

    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the project from the team BeginBloc of Software Engineering lab.</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>

    {{-- <div style="width: 660px; height: 425px; flex-shrink: 0; overflow: hidden;">
        <img src="homepage_photo.jpg" alt="Your Image Description" style="width: 100%; height: 100%; object-fit: cover;">
    </div> --}}

    <div style="width: 100%; color: rgba(0, 0, 0, 0.20); font-size: 60px; font-family: Raleway; font-weight: 700; line-height: 76px; letter-spacing: 0.50px; word-wrap: break-word">
        <br/>Let's start the start-ups!<br/>
    </div>
    
@endSection

{{-- homepage --}}