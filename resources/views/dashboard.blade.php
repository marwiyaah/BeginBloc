@extends('layouts.app')

@section('content')
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="stylesheet" href="C:\xampp\htdocs\BeginBloc\resources\css\navbar.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">
  <!-- Nucleo Icons -->
  {{-- <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" /> --}}
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

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

    .dashboard-header {
        background-color: #2A6877; /* Change the background color as needed */
        color: #fff; /* Change the text color as needed */
        font-size: 24px; /* Adjust the font size as needed */
        padding: 10px; /* Adjust the padding as needed */
    }
    .panel-body{
        margin: 0 0 20px 50px;
        width: 88%;
    }
    .card-title {
        font-weight: bold; /* Add this line to make the text bold */
        font-size: 18px; /* Adjust the font size as needed */
        margin-bottom: 10px; /* Adjust the margin as needed */
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 150px; background-color: white;">
                <div class="card-header dashboard-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            
                            
                        @endif

                        {{ __('You are logged in!') }}
                    </div>

                    <div class="panel-body">
                        <a href="/posts/create" class="btn btn-primary" style="margin: 0 0 10px 0;">Create Post</a>
                        <h3>Your start-up posts appear here</h3>
                        @if (count($posts) > 0)
                            <table class="table table-stripped">
                                <tr>
                                    <td style="background-color: #f5c5ff; color: #000000; font-weight: bold; width: auto;">Title</td>
                                    <td style="background-color: #f5c5ff; width: 100px;"></td>
                                    <td style="background-color: #f5c5ff; width: 100px;"></td>
                                    <td style="background-color: #f5c5ff; width: 120px;"></td>
                                </tr>
                        
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            <a href="{{ url('/posts/' . $post->id) }}" style="text-decoration: none; color: inherit;">{{$post->title}}</a>
                                        </td>
                                        <td>
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-success" style="background-color: rgb(21, 126, 77); width: 100px;"><i class="las la-edit"></i> Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ action('App\Http\Controllers\PostsController@destroy', $post->id) }}" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger" style="width: 100px;"><i class="las la-trash-alt"></i> Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ url('/contributions/' . $post->id) }}" class="btn btn-success" style="background-color: rgb(16, 73, 148); width: 120px;">
                                                <i class="las la-bell"></i> Responses ({{ $post->contributions->count() }})
                                            </a>
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
