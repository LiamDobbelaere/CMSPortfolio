<div class="row">
    <div class="col s12">
        <h2>{{ $post->title }}</h2>
        <span>{{ $post->created_at->toFormattedDateString() }}</span>
        <p class="flow-text">{{ $post->body }}</p>
    </div>
</div>
<div class="divider"></div>