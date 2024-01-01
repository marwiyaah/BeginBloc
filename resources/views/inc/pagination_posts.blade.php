
<!-- pagination_posts.blade.php -->
@if(count($posts) > 0)
    @foreach($posts as $post)
        <div class="row mb-4"> 
            <div class="col-md-4 col-sm-4">
                <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width: 100%">
            </div>
            <div class="col-md-4 col-sm-8">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>
                    Written on {{$post->created_at}} by {{ optional($post->user)->name ?? 'Unknown User' }}
                </small>
            </div>
        </div>
    @endforeach
    {{$posts->links()}}
@else
    <p>No posts found.</p>
@endif

