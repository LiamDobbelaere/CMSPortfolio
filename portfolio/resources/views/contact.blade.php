@extends('partials.master')

@section('includes')
    <link rel="stylesheet" type="text/css" href="/css/contact.css"/>
@endsection

@section('content')
    <h3>Contact</h3>
    <div class="divider"></div>

    @if (isset($complete))
        <p>Your mail was sent, I'll reply soon!</p>
    @else
        <div id="envelope">
            <div class="top">
            </div>
            <div class="bottom">
                <form class="col s12" method="post" action="/contact/send">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" name="name" type="text" placeholder=""/>
                            <label for="name" class="active">From (e-mail)</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="to-mock" type="text" value="Tom Dobbelaere" readonly/>
                            <label for="to-mock">To</label>
                        </div>
                        <div class="input-field col s12">
                    <textarea style="max-height: 50px;" id="body" name="body"
                              class="materialize-textarea">

                    </textarea>
                            <label for="body">Body</label>
                        </div>
                        <div class="input-field col s12">
                            <input class="btn btn-primary" type="submit" value="Send"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif
@endsection
