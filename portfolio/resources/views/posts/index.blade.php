@extends('partials.master')

@section('content')
    <div class="section">
        @foreach ($posts as $post)
            @include('partials/post')
        @endforeach
    </div>

    {{ $posts->links() }}
@endsection
