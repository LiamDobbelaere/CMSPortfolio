@extends('partials.master')

@section('content')
    <h2>{{ isset($post) ? 'Edit post': 'Create new post' }}</h2>
    <div class="row">

        @if ($errors->any())
                @foreach($errors->all() as $error)
                    <p class="red-text darken-2">{{ $error }}</p>
                @endforeach
        @endif

        <form class="col s12" method="post" data-actual-method="put" action="/posts">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input id="title" name="title" type="text" value="{{ isset($post) ? $post->title : '' }}">
                    <label for="title">Title</label>
                </div>
                <div class="input-field col s12">
                    <textarea style="min-height: 175px;" id="body" name="body" class="materialize-textarea">{{ isset($post) ? $post->body : '' }}</textarea>
                    <label for="body">Body</label>
                </div>
                <div class="input-field col s12">
                    <input class="btn btn-primary" type="submit" value="Create post"/>
                </div>
            </div>
        </form>
    </div>
@endsection
