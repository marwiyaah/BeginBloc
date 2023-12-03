

{{-- @extends('layouts.app')

@section('content')

    <div style="width: 70%; max-width: 400px; margin: auto; padding: 20px; box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.05); border-radius: 15px; background-color: rgba(200.81, 200.81, 200.81, 0.62);">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
            <div style="width: 40px; height: 50px; display: flex; flex-direction: column; align-items: center; gap: 10px;">
                {{-- <div style="width: 40px; height: 50px; background: #50AC97; border-radius: 8px;"></div>
                <div style="width: 5px; height: 15px; background: #50AC97; border-radius: 2px;"></div>
                <div style="width: 2px; height: 3px; background: #50AC97; border-radius: 1px;"></div> --}}
            {{-- </div>
            <div style="color: #4E4F51; font-size: 24px; font-family: Raleway; font-weight: bold; letter-spacing: 0.50px;"><h1>Create Post</h1></div>
            
            @if(session('message'))
                <div style="width: 100%; padding: 10px; background-color: {{ session('status') === 'success' ? '#2A6877' : '#C64F36' }}; color: #F0F1F3; font-size: 18px; text-align: center; border-radius: 8px;">
                    {{ session('message') }}
                </div>
            @endif

            {{-- {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!} --}}
            {{-- {!! Form::open(['route' => 'posts.store', 'method' => 'post', 'enctype' => 'multipart/form-data', 'style' => 'width: 100%; display: flex; flex-direction: column; gap: 15px;']) !!}
                {!! Form::token() !!}

                {!! Form::label('title', 'Title', ['style' => 'width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;']) !!}
                {!! Form::text('title', '', ['style' => 'width: 100%; height: 34px; background: #FFFBFB; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;']) !!}

                {!! Form::label('body', 'Body', ['style' => 'width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;']) !!}
                {!! Form::textarea('body', null, ['style' => 'width: 100%; height: 150px; background: white; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;']) !!}

                <div style="width: 100%; height: 100%; display: flex; justify-content: space-between;">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary', 'style' => 'width: 48%; height: 40px; border-radius: 8px; font-size: 18px; font-family: DM Sans; font-weight: 500; letter-spacing: 0.50px; cursor: pointer; box-sizing: border-box;']) !!}
                    {!! Form::button('Cancel', ['class' => 'btn btn-primary', 'style' => 'width: 48%; height: 40px; background: #C64F36; border: none; border-radius: 8px; color: #F0F1F3; font-size: 18px; font-family: DM Sans; font-weight: 500; letter-spacing: 0.50px; cursor: pointer; box-sizing: border-box;']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection --}}

{{-- 
@section('content')
    <h1>Create Posts</h1>
    {!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=> 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class'=> 'form-control', 'placeholder' => 'Body Text'])}}
        </div>

        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection --}}

<!-- resources/views/form.blade.php -->



{{-- @extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="post" action="{{ url('/posts') }}">
        @csrf
    
        <!-- Your form fields go here -->
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
    
        <label for="body">Body:</label>
        <input type="textarea" name="body" id="body" required>
    
        <button type="submit">Submit</button>
    </form>


    
@endsection --}}


@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">

@section('content')
<style>
    /* public/css/styles.css */
    body {
        margin: 0 0 0 150px;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
        /* display: flex;
        align-items: center; */
    }

</style>
    <div style="width: 70%; max-width: 900px; margin: 200px 100px 0 200px; padding: 20px; box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.05); border-radius: 15px; background-color: rgba(200.81, 200.81, 200.81, 0.62);">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
            
            <div style="color: #4E4F51; font-size: 24px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px;">Create Post</div>

            @if(session('message'))
                <div style="width: 100%; padding: 10px; background-color: {{ session('status') === 'success' ? '#2A6877' : '#C64F36' }}; color: #F0F1F3; font-size: 18px; text-align: center; border-radius: 8px;">
                    {{ session('message') }}
                </div>
            @endif

            <form style=" width: 100%; display: flex; flex-direction: column; gap: 15px; margin-top: 120px;" action="{{ action('App\Http\Controllers\PostsController@store') }}" method="post">
                @csrf

                <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Title</label>
                <input type="text" style="width: 100%; height: 34px; background: #FFFBFB; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" name="title" id="title" placeholder="Title" required>

                {{-- <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Body</label>
                <textarea style="width: 100%; height: 150px; background: white; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" name="body" id="article-ckeditor" placeholder="Body" required></textarea> --}}

                <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Body</label>
                <textarea name="body" style="width: 100%; height: 150px; background: white; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" id="article-ckeditor" placeholder="Body" required></textarea>

                <button type="submit" style="width: 100%; height: 40px; background: #2A6877; border: none; border-radius: 8px; color: #F0F1F3; font-size: 18px; font-family: DM Sans; font-weight: 500; letter-spacing: 0.50px; cursor: pointer;">Submit</button>
            </form>

            <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('article-ckeditor');
            </script>
            
        </div>
    </div>
@endsection


