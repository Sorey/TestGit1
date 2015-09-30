@extends('app')

@section('content')

    <div>
        {!! link_to_route('posts', 'published') !!} &nbsp;&nbsp;&nbsp; {!! link_to_route('posts.unpublished', 'unpublished') !!} &nbsp;&nbsp;&nbsp; {!! link_to_route('post.create', 'new') !!}
    </div>

    @foreach($posts as $post)
        <article style="background:lightpink">
			<h2 style="background:red; color:yellow">{!!$post->title!!}</h2>
			<p style="color:darkblue">
                {!!$post->excerpt!!}
            </p>
            <p>
                published: {{$post->published_at}}
            </p>
        </article>
        @endforeach
@stop
