<div>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div>
                <h2><a href="{{ route('posts.show', ['id' => $post->id]) }}"{{ $post->name }}</h2>
            </div>
        @endforeach
    @endif

</div>
