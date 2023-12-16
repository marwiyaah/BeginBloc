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

    <h1 style="margin: 0 0 -20px 300px;">{{ $title }}</h1>

    <div style="width: 70%; max-width: 900px; margin: 50px 100px 0 100px; padding: 20px; box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.05); border-radius: 15px; background-color: rgba(134, 219, 255, 0.62);">
        <p>This is the project from team ABC of Software Engineering Laboratory.</p>
        <p>Developed By: Maria Akter Rimi</p>
        <p>ID: 011201428</p>
    </div>
    
@endsection
