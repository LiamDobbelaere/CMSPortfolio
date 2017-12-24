<div class="row">
    <div class="col s12">
        <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <span>{{ $post->created_at->toFormattedDateString() }}</span>
        <p class="flow-text" style="white-space: pre-wrap;">{{ $post->body }}</p>


        @if(isset($showComments))
            <form class="col s12" method="post" action="{{ '/posts/'.$post->id }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <input class="btn btn-primary red" type="submit" value="Delete"/>
                    </div>
                </div>

                @if (isset($post))
                    {{ method_field('DELETE') }}
                @endif
            </form>

            <form class="col s12" method="get" action="{{ '/posts/'.$post->id.'/edit' }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <input class="btn btn-primary orange" type="submit" value="Edit"/>
                    </div>
                </div>
            </form>

            <h5>Comments</h5>

        <div class="row card-panel">
            <form class="col s12 grey lighten-3" method="post" action="{{ '/comments/'.$post->id }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" name="name" type="text"/>
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email"/>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                    <textarea id="body" name="body"
                              class="materialize-textarea"></textarea>
                        <label for="body">Comment</label>
                    </div>
                    <div class="input-field col s12">
                        <input class="btn btn-primary" type="submit" value="Post comment"/>
                    </div>
                </div>
            </form>
        </div>

            @foreach($post->comments as $comment)
                <div class="row card-panel">
                    <span class="green-text text-darken-2"><b>{{$comment->name}}</b><span
                                class="grey-text text-darken-2"><i> - {{$comment->created_at->diffForHumans()}}</i></span></span>
                    <div class="divider"></div>
                    <p>{{$comment->body}}</p>
                </div>
            @endforeach

        @else
            <span>{{ sizeof($post->comments) }} comment{{sizeof($post->comments) == 1 ? '' : 's'}}</span>
        @endif

    </div>
</div>
<div class="divider"></div>