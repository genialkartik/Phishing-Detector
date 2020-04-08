@extends('layout/app')

 @section('content')

<style>
    #register{
	position: absolute;
	right: 300px;
    width: 25%;
    background: black;
	height: min-content;
	padding: 0px 40px;
	border-radius: 20px;
}
    .lottie2{
        position: absolute;
        left: 140px;
        top: 100px;
        width: 810px;
        height: 710px;
    }
</style>

    <div class="lottie2">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player
    src="https://assets8.lottiefiles.com/private_files/lf30_vAtD7F.json"  background="transparent"  speed="2"   loop autoplay >
</lottie-player>
</div>
<section id="register">
		<div class="reg-form">
			<form name="reg" id="registration" action="" method="POST">
            {!! Form::open( ['action' => ] ) !!}
                <br>
                <span>First Name</span><br>
				<input type="text" name="fname" id="button" placeholder="first name" required=""><br>
                <span>Last Name</span><br>
				<input type="text" name="lname" id="button" placeholder="last name" required=""><br>
                <span>Username</span><br>
				<input type="text" name="user" id="button" placeholder="username" required=""><br>
                <span>Email</span><br>
				<input type="email" name="email" id="button" id="email" placeholder="email" required=""><br>
                <span>Enter Password</span><br>
				<input type="password" name="pass1" id="passf" placeholder="password" required="" minlength="8"><br>
                <span>Confirm Password</span><br>
                <input type="password" name="pass2" id="passs" placeholder="confirm password" required="" minlength="8">
                <br><span id="verify"></span><br>
                <button type="submit" name="submit" class="button1"><span style="font-size: 1.5em;padding: 15px;">Register</span></button><br>
				<p style="color: white">already member? <a href="login.php"> <u> sign in</u></a></p>
			</form>
		</div>
    </section>
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
    
    @endsection