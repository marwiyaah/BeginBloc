@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">

@section('content')
<style>
    /* public/css/styles.css */
    body {
        margin: 0px 0 0 150px;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
    }
</style>

<div style="width: 70%; max-width: 900px; margin: 200px 100px 0 100px; padding: 20px; box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.05); border-radius: 15px; background-color: rgba(200.81, 200.81, 200.81, 0.62);">
    <div style="display: flex; flex-direction: column; align-items: center; gap: 20px; margin-top: 50px;"> <!-- Adjusted margin-top value -->
        
        <div style="color: #4E4F51; font-size: 24px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; margin: -20px 0 0 0">Edit Post</div>

        {{-- @if(session('message'))
            <div style="width: 100%; padding: 10px; background-color: {{ session('status') === 'success' ? '#2A6877' : '#C64F36' }}; color: #F0F1F3; font-size: 18px; text-align: center; border-radius: 8px; margin-top: 300px;">
                {{ session('message') }}
            </div>
        @endif --}}

        <form method="POST" action="{{ route('posts.update', $post->id) }}" style="width: 100%; display: flex; flex-direction: column; gap: 15px; margin-top: 20px;" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            
            <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px; margin-top: -10px;">Title</label>
            <input type="text" style="width: 100%; height: 34px; background: #FFFBFB; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" name="title" id="title" value="{{$post->title}}" placeholder="Title" required>

            <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Body</label>
            <textarea name="body" id="article-ckeditor" style="width: 100%; height: 150px; background: #FFFBFB; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" placeholder="Body Text">{{ $post->body }}</textarea>

            <div class="form-group">
                {{-- <form action=""></form> --}}
                <input type="file" name="cover_image">
            </div>

            <button type="submit" style="width: 100%; height: 40px; background: #2A6877; border: none; border-radius: 8px; color: #F0F1F3; font-size: 18px; font-family: DM Sans; font-weight: 500; letter-spacing: 0.50px; cursor: pointer;">Submit</button>
        </form>

        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('article-ckeditor');
        </script>
        
    </div>
</div>
@endsection
