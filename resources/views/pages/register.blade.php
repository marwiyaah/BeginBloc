{{-- register --}}
{{-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'BeginBloc')}}</title>
    </head>
    <body>
        <h1>Register</h1>
        <p>This is the register page.</p>
    </body>
</html> --}}


@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">
@section('content')

<style>
    /* public/css/styles.css */
    body {
        margin-top: 150px;
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
    <div style="width: 70%; height: 500px; max-width: 400px; margin-top: 200px; padding: 20px; box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.05); border-radius: 15px; background-color: rgba(200.81, 200.81, 200.81, 0.62);">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
            
            <div style="color: #4E4F51; font-size: 24px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px;">Create Post</div>

            @if(session('message'))
                <div style="width: 100%; padding: 10px; background-color: {{ session('status') === 'success' ? '#2A6877' : '#C64F36' }}; color: #F0F1F3; font-size: 18px; text-align: center; border-radius: 8px;">
                    {{ session('message') }}
                </div>
            @endif

            <form style="width: 100%; display: flex; flex-direction: column; gap: 15px;" action="{{ url('/posts') }}" method="post">
                @csrf

                <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Title</label>
                <input type="text" style="width: 100%; height: 34px; background: #FFFBFB; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" name="title" id="title" placeholder="Title" required>

                {{-- <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Body</label>
                <textarea style="width: 100%; height: 150px; background: white; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" name="body" id="article-ckeditor" placeholder="Body" required></textarea> --}}

                <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Body</label>
                <textarea style="width: 100%; height: 150px; background: white; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" id="article-ckeditor" placeholder="Body" required></textarea>

                <button type="submit" style="width: 100%; height: 40px; background: #2A6877; border: none; border-radius: 8px; color: #F0F1F3; font-size: 18px; font-family: DM Sans; font-weight: 500; letter-spacing: 0.50px; cursor: pointer;">Submit</button>
            </form>

            <script src={{asset('ckeditor/ckeditor.js')}}></script>

            
        </div>
    </div>
@endsection
