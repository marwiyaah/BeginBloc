<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('C:\xampp\htdocs\BeginBloc\resources\css\app.scss')}}">
        <title>{{config('app.name', 'BeginBloc')}}</title>
    
        <!-- Include CKEditor from CDN -->
        <script src="https://cdn.ckeditor.com/ckeditor5/44.0.3/classic/ckeditor.js"></script>

        
    </head>
    {{-- <body class="p-3 mb-2 bg-danger text-white"> --}}
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')

            {{-- <script src="https://cdn.ckeditor.com/ckeditor5/44.0.3/classic/ckeditor.js"></script>
            <script>
                CKEDITOR.replace( 'article-ckeditor' );
            </script> --}}
                
        </div>

        
    </body>
</html>

{{-- homepage --}}