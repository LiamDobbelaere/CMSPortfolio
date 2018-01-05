@extends('partials.master')

@section('content')
    <h3>Projects</h3>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s2" style="height: 200px; background: url('/images/connectfour.png') no-repeat center; background-size: contain;">
        </div>
        <div class="input-field col s10">
            <h5>Connect Four</h5>
            <p>This is a recreation of the Connect Four game in node.js.<br/>
                You can view the source code at <a href="https://github.com/TomDobbelaere/WebsitePortfolio">https://github.com/TomDobbelaere/WebsitePortfolio</a></p>
            <a href="/projects/connectfour" class="btn btn-primary">Play</a>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s2" style="height: 200px; background: url('/images/uno.png') no-repeat center; background-size: contain;">
        </div>
        <div class="input-field col s10">
            <h5>Uno</h5>
            <p>This is a recreation of Uno in node.js.<br/>
                You can view the source code at <a href="https://github.com/TomDobbelaere/WebsitePortfolio">https://github.com/TomDobbelaere/WebsitePortfolio</a></p>
            <a href="/projects/uno" class="btn btn-primary">Play</a>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s2" style="height: 200px; background: url('/images/doodlewars.png') no-repeat center; background-size: contain;">
        </div>
        <div class="input-field col s10">
            <h5>Doodle Wars</h5>
            <p>This was a group project we did in college.<br/>
                You can view the source code at <a href="https://github.com/TomDobbelaere/GeometryWars">https://github.com/TomDobbelaere/GeometryWars</a></p>
            <p>
                You have to install Java 7 to run this. If it doesn't start when double clicking, run 'java -jar doodlewars.jar' in a commandline to start it.
            </p>

            <a href="/files/doodlewars.jar" class="btn btn-primary">Download</a>

        </div>
    </div>

@endsection
