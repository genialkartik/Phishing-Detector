
  
  <link rel="stylesheet" href="assets/css/navbar.css">
  

   <div id='cssmenu'>
   <ul>
       <li style="float: left;color:white;font-size: 1.5em; font-style: bold;">
         <span><a href="{{ url('/') }}">
            Phishing Detection
            </a>
         </span>
       </li>
       <li class="active">
         <a href="/" >Home</a>
       </li>
         @guest
               <li >
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
               </li>
               @if (Route::has('register'))
                  <li>
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                  </li>
               @endif
            @else
               <li >
                  <a   href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <li>
                        <a  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                           Logout
                        </a>
                     </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
               </li>

            @endguest
       </ul>
     </div>

  
  
