@extends('partials.master')

@section('content')
    <div class="section">
        @if (Auth::check())
            <a href="/posts/create">New post</a>
        @endif

        @foreach ($posts as $post)
            @include('partials/post')
        @endforeach
    </div>

    {{ $posts->links() }}
@endsection
