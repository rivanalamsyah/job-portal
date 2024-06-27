<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Recent Post</h3>
    @foreach($recent_posts as $post)
    <div class="media post_item">
        <img src="{{ asset($post->image) }}" alt="post">
        <div class="media-body">
            <a href="{{ route('blog.show', $post->id) }}">
                <h3>{{ $post->title }}</h3>
            </a>
            <p>{{ $post->created_at->diffForHumans() }}</p>
        </div>
    </div>
    @endforeach
</aside>
