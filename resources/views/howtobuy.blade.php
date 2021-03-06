
        <!DOCTYPE html>
        <html lang="en">

        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('img/logo.ico')}}"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>GamerOn Fire</title>
        <link href="css/forum_bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/forum_style.css" rel="stylesheet" type="text/css">
        <link href="css/forum_editor.css" rel="stylesheet" type="text/css">
        <link href="css/forum_animate.css" rel="stylesheet" type="text/css">
        <link href="css/forum_font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>

        <body>
        <!--======== Navbar =======-->
        <!-- ==========header mega navbar=======-->
        <div class="top-menu-bottom932">
        <nav class="navbar navbar-default">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{ route('home') }}"><img src="image/logo.png" class="img-responsive"width="30%" h alt="Logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav"> </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a class="active" href="/howtobuy">How to buy and Sell</a></li>
                @if(Auth::user())
               @if($userInfo == "admin")
               <li><a href="/admin">Admin</a></li>
               @endif
               @endif
                <!-- Drop down semple -->
                <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games <span class="caret"></span></a>
                    <ul class="dropdown-menu animated zoomIn">
                    <li><a href="Forum_logIn.html" target="_blank">Login</a></li>
                    <li><a href="Forum_contact_us.html" target="_blank"> Contact Us</a></li>
                    <li><a href="Forum_post-deatils.html" target="_blank"> post-Details </a></li>
                    <li><a href="#" target="_blank"> User Question </a></li>
                    <li><a href="#" target="_blank"> Category </a></li>
                    <li><a href="#" target="_blank"> 404 </a></li>
                    </ul>
                </li> -->
                @if(Auth::user())
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orders<span class="caret"></span></a>
                    <ul class="dropdown-menu animated zoomIn">
                    <li><a href="/buying?user={{Auth::user()->id}}" >My Orders (buying)</a></li>
                    <li><a href="/selling?user={{Auth::user()->id}}" >My Orders (selling)</a></li>
                    </ul>
                </li>
                @endif
                <li><a href="#contact">Contact us</a></li>


                @if(Auth::user())
                
                <li class="dropdown" style="margin-left: 30px"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu animated zoomIn">
                    <li><a href="/editProfile" > Edit Profile </a></li>
                    <li><a href="/post">post</a> </li>
                    <!--  <li><a href="{{ route('dashboard') }}" > Dashboard </a></li> -->
                <!-- logout  -->
                    <li>
                        <!-- Authentication -->
                        <form method="POST" class="logout-frm" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                        </form>
                    </li>
                    </ul>
                </li>
                <li>
                <img class="profile-picture" 
                @if(empty($userInfo)) 
                src="{{ asset('image/default.png') }}"
                @else
                src="{{ asset('storage') }}/{{$userInfo['user_image']}}"
                @endif
                alt="">
                </li>
                @else
                <li><a href="{{ route('login') }}">Login </a> </li>
                <li><a href="{{ route('register') }}">Register </a> </li>
                @endif
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        </div>
        <section class="container-sm">
            <div class="questions">
        <div class="p-5 text-center bg-light"  style="margin-top: 58px;">
           <h1 class="mb-3">How to buy</h1>
           <h4 class="mb-3">Most frequent question</h4>
           <p class="mb-3 text-info"  style="font-size:15px"> Go to the Home page and click buy button.After that check the My orders(Buying) at the Top.It will show the status pending then you have to pay the amount through Bkash (008801678192628).Ref will be your Username and game name.Once you are done with payment you will get the accounts details within 3days.If payment is not completed within 7 days the account will be again displayed for others. Feel free to contact us for any query or questions. </p>
           <br>
           <h1 class="mb-3">Is it safe?</h1>
           <p class="mb-3 text-info" style="font-size:15px">Trading gaming assets can be risky. Here we check the validity of the account before giving it to you. If we cant deliver the product we will contact you and return your payment.</p>
           <br>
           <h1 class="mb-3">How to Sell?</h1>
           <br>
           <p class="mb-3 text-info" style="font-size:15px">Post your game account in post pages.Add your personal Bkash number to receive the payment .Once your account is sold you will get your payment.<p>
           <br>
           <h1 class="mb-3">Can you cancel your sell?</h1>
           <p class="mb-3 text-info" style="font-size:15px"> Yes, you can cancel your sell but if it has been sold out you can not cancel it. </p>
          <br>
          <h1 class="mb-3">Fee?</h1>
           <p class="mb-3 text-info" style="font-size:15px">It's free to register as a seller and post for-sale offers. Once you make a sale, GameonFire will charge a small transaction fee(5%)</p>
           <!-- Jumbotron -->

            </div>

        </section>
        
    <!--    footer -->
    <div class="footer-search">
    <div class="container">
      <div class="row">
        <!--
        <div id="custom-search-input">
          <div class="input-group col-md-12"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <input type="text" class="  search-query form-control user-control30" placeholder="Search here...." /> <span class="input-group-btn">
              <button class="btn btn-danger" type="button">
                <span class=" glyphicon glyphicon-search"></span> </button>
            </span>
          </div>
        </div>
        -->
      </div>
    </div>
  </div>
  <section class="footer-part" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info-part-one320">
            <h4>About us ?</h4>
            <p class="mb-0">Our platform offers marketplaces to provide buyers and sellers with hassle-free trading for game accounts.</p>
            <h4>Address :</h4>
            <p class="mb-0">1254,Road2,Kamalapur
              <br> Dhaka,1200.</p>
            <h4>Support :</h4>
            <p class="mb-0">Support Telephone No : +8801868535004</p>
            <p class="mb-0">Support Email Account : GameonFire@gmail.com</p>
            <p class="mb-0">info@example.com</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-part-two320">
            <h4>Quick Links</h4>
            <a href="{{ route('home') }}">
              <p>-Home</p>
            </a>
            <a href="/howtobuy">
              <p>-Questions</p>
            </a>
            <a href="#">
              <p>-Users</p>
            </a>
            <a href="#">
              <p>-Profile</p>
            </a>
            <a href="#contact">
              <p>-Contact Us</p>
            </a>
            <a href="{{ route('home') }}" class="last-child12892">
              <p>-Buy now</p>
            </a>
          </div>
        </div>
        <!-- contact form -->
        <div class="col-md-6">

          <div class="payments text-center">
            <h1 style="color:pink"><i>Payment Info<i></h1>
            <h3 style="color:pink"><i>Bkash<i></h3>
            <i class="fa fa-credit-card" style="font-size:100px;color:pink"></i>
            <h5 style="color:pink"><i>008801678192628<i></h5>
          </div>
        </div>
       
      </div>
    </div>
    
  </section>
  <section class="footer-social">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Copyright 2021 | <strong>GameOnFire</strong></p>
        </div>
        <div class="col-md-6">
          <div class="social-right2389"> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a
              href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-rss"
                aria-hidden="true"></i></a> </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/npm.js"></script>
</body>

</html>
       