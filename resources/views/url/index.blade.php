@extends('./layouts/app')

 @section('content')
<style>
    .lottie1{
        position: absolute;
        right: 100px;
        top: -90px;
        width: 510px;
        height: 510px;
    }
</style>
<div class="lottie1">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player
    src="https://assets3.lottiefiles.com/private_files/lf30_WdTEui.json"  background="transparent"  speed="1"   loop autoplay >
</lottie-player>
</div>


	<!-- checker-->
	<section id="check">
		<div class="container">
            <h1>Phishing Checker</h1>
            {!! Form::open(['action' => 'UrlsController@index', 'method' => 'GET']) !!}
                <div class="url-search-form">
                    {{Form::text('url', '', ['class' => 'checkurl', 'placeholder' => 'Enter url here...'])}}
                    <br>
                    <br>
                    {{Form::submit('Submit', ['class' => 'url-btn'])}}
                </div>
            {!! Form::close() !!}
	</div>
</section>

        <!-- Header -->
        @if(count($item)>0)
                <header id="header">
                    <p>The URL entered ({{$enteredURL}}) is found <span style="color:red;font-style:bold;">Vulnerable</span>. </p>   
                    <p>Phishing status: <span style="color:red">+ve</span></p> 
                </header>
        @else
			<header id="header">
                <p>The URL entered ({{$enteredURL}}) is <span style="color:green;font-style:bold;">safe to use</span>. </p>   
                <p>Phishing status: <span style="color:green">-ve</span></p> 
            </header>
		@endif
 @endsection
