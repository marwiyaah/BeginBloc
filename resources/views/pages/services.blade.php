@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">
@section('content')

    <style>
        /* public/css/styles.css */
        body {
            margin: 150px 200px 0;
            font-family: 'Raleway', sans-serif; /* Apply the desired font */
        }

    </style>
    <div>
        <h1>{{$title}}</h1>

        @if (count($services) > 0)
            <ul class="list-group">
                @foreach ($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
