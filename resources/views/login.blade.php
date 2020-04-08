@extends('layouts/app')

 @section('content')
<style>
    #register{
	position: relative;
	left: 150px;
	width: 25%;
	height: min-content;
	padding: 0px 40px;
	border-radius: 20px;
}
    
</style>

<section id="register">
		<div class="reg-form">
			<form name="reg" id="login" action="" method="POST">
                <br>
                <span>Username</span><br>
				<input type="text" name="user" id="button" placeholder="username" required=""><br><br>
                <span>Enter Password</span><br>
				<input type="password" name="pass1" id="passf" placeholder="password" required="" minlength="8"><br><br>
                <button type="submit" name="submit" class="button1"><span style="font-size: 1.5em;padding: 15px;">Register</span></button><br><br>
				<p style="color: white">New Visitor? <a href="login.php"> <u>Register</u></a></p>
			</form>
		</div>
    </section>
    
    <style>
    .lottie2{
        position: absolute;
        right: 140px;
        top: 100px;
        width: 810px;
        height: 710px;
    }
</style>

    <div class="lottie2">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player
    src="https://assets2.lottiefiles.com/packages/lf20_xRmNN8.json"  background="transparent"  speed="1"   loop  autoplay >
</lottie-player>
</div>

@endsection