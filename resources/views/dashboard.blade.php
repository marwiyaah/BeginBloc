@extends('layouts.app')

@section('content')
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="stylesheet" href="C:\xampp\htdocs\BeginBloc\resources\css\navbar.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  {{-- <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" /> --}}
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />


  <style>
    body {
        margin: 0;
        background: linear-gradient(120deg, #F6F8FA 0%, #D2E4ED 100%);
        font-family: 'Raleway', sans-serif;
        color: rgba(0, 0, 0, 0.8); /* Adjust text color as needed */
    }

    .jumbotron {
        background: none;
    }

    .jumbotron h1,
    .jumbotron p {
        color: #568F9B;
    }

    .btn-primary,
    .btn-success {
        background-color: #568F9B;
        border-color: #568F9B;
    }

    .btn-primary:hover,
    .btn-success:hover {
        background-color: #2A6877;
        border-color: #2A6877;
    }

    .jumbotron p {
        color: #568F9B;
    }

    .custom-text {
        margin-top: 20px; /* Adjust the margin-top value as needed */
        color: rgba(0, 0, 0, 0.20);
        font-size: 60px;
        font-weight: 700;
        line-height: 76px;
        letter-spacing: 0.50px;
        word-wrap: break-word;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 150px; background-color: white;">
                <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            
                            
                        @endif

                        {{ __('You are logged in!') }}
                    </div>

                    <div class="panel-body" >
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <h3>Your start-up posts appear here</h3>
                        @if (count($posts) > 0)
                        <table class="table table-stripped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>

                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    <form action="{{ action('App\Http\Controllers\PostsController@destroy', $post->id) }}" method="post" class="pull-right">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                    
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        <p>You have no posts!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
