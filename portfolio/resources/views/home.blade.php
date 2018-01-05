@extends('partials.master')

@section('content')
    <div class="container">
        <h5>Dashboard</h5>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="col s12">
            You are logged in! Welcome
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
               aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->name }}<span class="caret"></span>
            </a>
        </div>

        <div class="col s12">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection
