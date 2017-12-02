<div class="row">
    <div class="col s12">
        <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <span>{{ $post->created_at->toFormattedDateString() }}</span>
        <p class="flow-text" style="white-space: pre-wrap;">{{ $post->body }}</p>
    </div>
</div>
<div class="divider"></div>