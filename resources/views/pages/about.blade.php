@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">

@section('content')
<style>
    /* public/css/styles.css */
    body {
        margin: 150px 200px 0;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
    }

    h1 {
    /* Add specific styles for the h1 tag if needed */
    }

    .list-group-item {
    /* Add specific styles for list items if needed */
    }

    /* Add other styles as needed */

</style>

    <h1>{{ $title }}</h1>
    <p>This is the about page.</p>
@endsection
