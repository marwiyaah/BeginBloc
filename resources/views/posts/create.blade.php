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
    <div style="width: 70%; max-width: 900px; margin: 200px 100px 0 100px; padding: 20px; box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.05); border-radius: 15px; background-color: rgba(200.81, 200.81, 200.81, 0.62);">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
            
            <div style="color: #4E4F51; font-size: 24px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px;">Create Post</div>

            @if(session('message'))
                <div style="width: 100%; padding: 10px; background-color: {{ session('status') === 'success' ? '#2A6877' : '#C64F36' }}; color: #F0F1F3; font-size: 18px; text-align: center; border-radius: 8px;">
                    {{ session('message') }}
                </div>
            @endif

            <form style=" width: 100%; display: flex; flex-direction: column; gap: 15px;" action="{{ action('App\Http\Controllers\PostsController@store') }}" method="post", enctype="multipart/form-data">
                @csrf

                <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Title</label>
                <input type="text" style="width: 100%; height: 34px; background: #FFFBFB; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" name="title" id="title" placeholder="Title" required>

                <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Amount</label>
                <input type="text" style="width: 100%; height: 34px; background: #FFFBFB; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" name="amount" id="amount" placeholder="Amount" required>

                {{-- <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Body</label>
                <textarea style="width: 100%; height: 150px; background: white; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" name="body" id="article-ckeditor" placeholder="Body" required></textarea> --}}

                <label style="width: 100%; color: #4E4F51; font-size: 16px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px; border-radius: 8px;">Body</label>
                <textarea name="body" style="width: 100%; height: 150px; background: white; border: 1px solid #BEBEBE; border-radius: 8px; padding: 5px;" id="article-ckeditor" placeholder="Body" required></textarea>

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


