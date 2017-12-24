@extends('partials.master')

@section('content')
    <div class="section">
        @include('partials/post', array('showComments' => 'true'))
    </div>
@endsection
