@extends('layouts/app')

 @section('content')
<style>
    .lottie1{
        position: absolute;
        right: 150px;
        top: -100px;
        width: 650px;
        height: 650px;
    }
    .checkurl{
  width: 50%;
}
</style>
<div class="lottie1">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
            src="https://assets8.lottiefiles.com/packages/lf20_jG18nt.json"  background="transparent"  speed="1"   loop autoplay >
        </lottie-player>
</div>


    <!-- checker-->
        <section id="check">
            <div class="container">
                <h1>Got a Vunerable Website?</h1>
                <span>Great! Submit the site to review.</span>
                @guest
                <br>
                @if (Route::has('register'))
                <br>
                <p>Kindly, <a href="/login"> Login</a> first to submit Vulnerable Site.</p>
                @endif
                @else
                {!! Form::open(['action' => 'UrlsController@store', 'method' => 'POST']) !!}
                <div class="url-search-form">
                    <input type="text" name="url" class="checkurl" placeholder="Enter url here..." required>
                    <br>
                    <br>
                    {{Form::submit('Insert', ['class' => 'url-btn'])}}
                </div>
            {!! Form::close() !!}
            </div>
        </section>
    @endguest

        
			<header id="header">
                <p>Your Contribution to identify <a href="/phishedURL" style="color:white">Vulnerable Sites</a> is beyond worth. <br>
                By Submitting a Suspicious Website, you're Saving Thousands to Peoples <br>
                 by Protecting them from being Robbed, Looted and Hacked.</p>
                <p>Click to Know More about <a href="https://en.wikipedia.org/wiki/Phishing"  style="color:white">Phishing!</a>.</p>
            </header>
 @endsection
