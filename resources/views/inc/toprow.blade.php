  <!-- Top Row Starts here -->     
  <div class="container-fluid top_bg">
                    <div class="row">
                        <div class="col-sm-5">
                            <ul class="social-network">
                                <li><a href="https://www.facebook.com/educatorecic/" target="blank"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-googleplus"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-Youtube"></ion-icon></a></li>
                                
                            </ul>
                        </div>
                        <div class="col-sm-5 contacts">
                             <ul class="nav flex-column text-left social_text">
                                <li class="nav-item"><a class="" href=""><ion-icon name="call" class="icon-text"></ion-icon> <span>+92-21-34718788, 34713242</span></a></li>
                                <li class="nav-item"> <a class="" href="mailto:ecic.karachi@gmail.com"><ion-icon name="mail" class="icon-text"></ion-icon> <span>ecic.karachi@gmail.com</span></a></li>
                            </ul>
                            
                           
                        </div>
        
        <div clas="col-sm-2">
            @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
        </div>
    </div>
</div>
 <!-- Top Row Ends here -->