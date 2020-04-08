# Phishing Detector

## Introduction
Phishing Detector is a web application built in PHP using Laravel (a web application framework) with expressive and elegant syntax. We developed this web app to provide the users and customers from fake websites whose intent is to garble user’s privacy and information. Phishing can be done in many way for instance: Fraudsters send fake emails or set up fake websites that mimic browsing to trick the user into disclosing his protected information like username, password, account details, OTP, etc. This practice is know as ‘Phishing’.

### Sign of Phishing Site:
* Suspicious URL (in correct company name, http:// (unsecured)).
* Unusual Pop-ups and Alert message.
* Unintentional redirect of URL, etc.

## Installation Guide
Install the Package through Composer.
Run the `Composer require` command from the Terminal

* `git clone https://github.com/genialkartik/Phishing-Detector ProjectName` <br>
    To clone and save the project files locally
* `cd ProjectName`
* `composer install` <br>
    By here now, all dependencies packages will get installed by default. If now then run:
* `php artisan package:discover --ansi`
    * Discovered Package: facade/ignition
    * Discovered Package: fideloper/proxy
    * Discovered Package: fruitcake/laravel-cors
    * Discovered Package: laravel/tinker
    * Discovered Package: nesbot/carbon
    * Discovered Package: nunomaduro/collision

* `php artisan key:generate`<br>
    Now, Create a database (ex: PhishingDB) and inform the same in .env file (create if not exist in root folder). <br>
    ** hint: copy code form .env.example file into .env file and change database name which you’ve created and password.<br>
* `php artisan migrate --seed` <br>
To create tables and populate it
* `php artisan key:generate`<br>
Laravel generate an encryption key to transact.
* `php artisan Serve`<br>
Finally, to start the app on: http://127.0.0.1:8000
<br><br>
Woah!!✨ You did it. I hope you may have installed the project successfully, if got stuck or got a glitch, feel free to connect [@genialkartik](https://kartiktyagi.me) . To contribute fork the repo and create a pull request. Good Luck🤟.
<br>

## A Quick Tour
* **HomePage ( / ) :** Search here for a phishing website.
* **Sign up ( /register ) :** Create your Account.
* **Sign in ( /login ) :** Login using your email and password
* **Submit Phishing Site ( /insertURL ) :** To submit a vulnerable website to review.
* **List of Phishing Sites ( /phishedURL ) :** To enlist the phishing websites.
* **Session :** once logged in you need not to login recursively.
 
## Hands-on experienced

* _Route Handling
* _Models
* _Controllers
* _DB Migration
* _Views/Templates
* _Authentication & Validation
* _Sessions
* _Compiling Assets
* _Error handling
* _Form requests, events, providers etc
* _Unit Testing using Tinker
* _Custom Modulation and commands


## Packages included
1. **Tinker :** `php artisan tinker`
1. **Laravel Collection :** laravelcollective/html
1. **Bootstrap**
1. **Animated Vectors ( CDN ):** lottiefiles

## Screenshots

![Screenshot](https://user-images.githubusercontent.com/32240906/78732003-03279080-795f-11ea-9205-914e339b7b31.png)
![Screenshot5](https://user-images.githubusercontent.com/32240906/78732010-07ec4480-795f-11ea-9112-8706b34e1aaa.png)
![Screenshot-1](https://user-images.githubusercontent.com/32240906/78732012-091d7180-795f-11ea-8ba5-c28323cb9e70.png)
![Screenshot-2](https://user-images.githubusercontent.com/32240906/78732015-0a4e9e80-795f-11ea-9dbf-3158b82926c7.png)
![Screenshot-3](https://user-images.githubusercontent.com/32240906/78732021-0b7fcb80-795f-11ea-96dd-7c501b6d6cf4.png)


_NOTE : Internet connection is required to compile cdn vector lottiefiles and some other included packages._

Connect Me on: [ [LinkedIn] ](https://linkedin.com/in/genial-kartik) | [ [Twitter] ](https://twitter.com/genialkartik) | [ [Facebook] ](https://facebook.com/genialkartik) | [ [Instagram] ](https://instagram.com/genialkartik) <br>
Visit: [ [kartiktyagi.me] ](https://kartiktyagi.me/)
