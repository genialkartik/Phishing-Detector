<!DOCTYPE HTML>
<!--
	Eventually by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Check Phishing</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/register.css" />
	</head>
	<body class="is-preload">

    <div id='cssmenu'>
<ul>
<li style="float: left;color:white;font-size: 1.3em; font-style: bold;"><span><a href="/"> Phishing Detection</a></span></li>
    
   <li class='active'><a href='/'>Home</a></li>
   <li><a href='/register'>Register</a></li>
   <li><a href='/login'>Login</a></li>
   <li><a href='/about'>About</a></li>
</ul>
</div>
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
    
    


        <!-- Footer -->
        
        <br>
        <footer id="footer">
				<ul class="icons">
                    <li>&copy; Phishing Checker</li><li>Github: <a href="https://github.com/genialkartik/phishing-checker">Source Code</a></li>
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>

