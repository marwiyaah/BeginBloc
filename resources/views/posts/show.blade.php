@extends('layouts.app')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

@section('content')
<style>
    /* public/css/styles.css */
    body {
        margin: 100px 0 0 200px;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
        display: flex;
        flex-direction: column;
    }

</style>


<div style="width: 70%; max-width: 600px; margin-top: 200px;">
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    
    <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width: 100%;"><br><br>
    <div>
        {!!$post->body!!}
    </div>
    <div>
        <h5>Budget: <span style="color: #40b840;">${!! $post->amount !!}</span></h5>
        <h5>Amount needed for deployment: <span style="color: #b87a40;">${!! $post->new_amount !!}</span></h5>
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{ optional($post->user)->name ?? 'Unknown User' }}</small>
    <hr>

    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <table>
                <tr>
                    <td>
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-success" style="background-color: rgb(21, 126, 77);"><i class="las la-edit"></i> Edit</a>
                    </td>
                    <td>
                        <form action="{{ action('App\Http\Controllers\PostsController@destroy', $post->id) }}" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" style="margin: 14px 0 0 5px;">
                                <i class="las la-trash-alt"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            </table>
        @else
            <table>
                <tr>
                    <td>
                        {{-- <button class="btn btn-info" style="background-color: #5bc0de;"><i class="las la-hand-pointer"></i> Contribute</button> --}}
                        {{-- <a href="/posts/{{$post->id}}/contribute" class="btn btn-info" style="background-color: #5bc0de;"><i class="las la-hand-pointer"></i> Contribute</a> --}}
                        <a href="/posts/{{$post->id}}/contribute" class="btn btn-info" style="background-color: #5bc0de;"><i class="las la-hand-pointer"></i> Contribute</a>
                    </td>
                </tr>
            </table>
        @endif  
    @endif





    
</div>
@endsection
