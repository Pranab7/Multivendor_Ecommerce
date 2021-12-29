<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{asset('img/logo.ico')}}"/>
  <title>GamerOn Fire</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/forum_font-awesome.min.css" rel="stylesheet" >
  <link href="css/forum_bootstrap.css" rel="stylesheet" >
  <link href="css/forum_animate.css" rel="stylesheet" >
  <link href="css/forum_editor.css" rel="stylesheet" >
  <link href="css/forum_style.css" rel="stylesheet">
  <!-- js link -->
  <script src="{{ asset('js/app.js') }}" defer></script>
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
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li><a href="/howtobuy">How to buy and Sell</a></li>
            @if(Auth::user())
              @if($userCategory == "admin")
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
                <li><a href="/post">post </a> </li>
                <!--<li><a href="{{ route('dashboard') }}" > Dashboard </a></li>-->
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

  <!-- <h1>{{ $userCategory }}</h1> -->
  <!--======= welcome section on top background=====-->
  <section class="welcome-part-one">
    <div class="container">
      <div class="welcome-demop102 text-center">
        <h2>Welcome to GameOnFire </h2>
        <p class="mb-0" style="font-size:20px">We support the trading of over 250 games, across all genres and product types
          <br> We attract a number of sellers with fantastic game accounts available to suit any needs and requirements a buyer may have, such as Fortnite accounts with rare skins like Renegade, League of Legends smurfs, high-level PUBG accounts, Genshin Impact accounts with 5* characters, Overwatch accounts, Valorant accounts, and more.</p>
        <div class="button0239-item">
          <a href="#contact">
            <button type="button" class="aboutus022">About Us</button>
          </a>
          @if(Auth::user())
          <a href="{{ route('home') }}">
            <button type="button" class="join92">Join Now</button>
          </a>
          @else
          <a href="/login">
            <button type="button" class="join92">Join Now</button>
          </a>
          @endif
        </div>
       <!-- Search
         <div class="form-style8292">
          <div class="input-group"> <span class="input-group-addon"><i class="fa fa-pencil-square" aria-hidden="true"></i></span>
            <input type="text" class="form-control form-control8392" placeholder="Ask any question and you be sure find your answer ?"> <span class="input-group-addon"><a href="#">Ask Now</a></span> </div>
        </div>
      </div>
        -->
    </div>
  </section>


  <!-- ======content section/body=====-->
  <section class="container " style="margin-top: 20px">
        <h1>Games</h1>
        <hr />
           <div class="card-group">
            @foreach($userPost as $post) 
              <div class="card" style="margin: 30px 0px;">
                <img class="card-img-top" src="{{asset('storage')}}/{{$post->game_image}}"  alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->game_name }}</h5>
                            <p class="card-text">{{ $post->game_details }}</p>
                            <p class="card-text">Price: {{ $post->game_price }} </p>
                            <p class="card-text"><small class="text-muted"><b> Seller: {{ $post->author_name }}</b></small></p>
                            <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }} </small></p>
                            @if($post->status == "unsold")
                              @if(Auth::user())
                              @if(Auth::id() == $post->user_id)
                              <button  class="btn btn-primary" disabled>Buy now</button>
                              @else
                              <a href="{{url('buynow')}}?seller={{$post->user_id}}&buyer={{Auth::user()->id}}&post={{$post->id}}"  class="btn btn-primary">Buy now</a>

                              @endif
                              @else
                              <a href="/login"  class="btn btn-primary">Buy now</a>
                              @endif
                            @else 
                              <p style="color: red; font-size: 18px;text-align:center;background: #ffd4d4;font-weight: 600;">SOLD OUT</p>
                            @endif
                    </div>
                </div>
            @endforeach
             <!-- <div class="card" style="margin: 30px 0px;">
               <img class="card-img-top" src="/image/blog-2-806x440.png"  alt="Card image cap">
                   <div class="card-body">
                       <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a summary details</p>
                          <p class="card-text">Price:</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          <button type="button" class="btn btn-primary">Buy now</button>
                   </div>
              </div> -->

               <!-- <div class="card">
                 <img class="card-img-top" src="/image/blog-2-806x440.png" alt="Card image cap">
                   <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                       <p class="card-text">This is a Summary details</p>
                       <p class="card-text">Price:</p>
                       <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                       <button type="button" class="btn btn-primary">Buy now</button>
                    </div>
                </div> -->

               <!-- <div class="card">
                  <img class="card-img-top" src="/image/blog-2-806x440.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a summary details</p>
                    <p class="card-text">Price:</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <button type="button" class="btn btn-primary">Buy now</button>
                    
                  </div>
                </div> -->


              </div>
  </section>


   <section id="content5">
              <!--Content Section 2-->
              <div class="question-type2033">
                <div class="row">
                  <div class="col-md-1">
                    <div class="left-user12923 left-user12923-repeat">
                      <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> </div>
                  </div>
                  <div class="col-md-9">
                    <div class="right-description893">
                      <div id="que-hedder2983">
                        <h3><a href="post-deatils.html" target="_blank">This is my first Product</a></h3>
                      </div>
                      <div class="ques-details10018">
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                      </div>
                      <hr>
                      <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> Price</i></a> <a href="#"><i class="fa fa-clock-o"
                            aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="ques-type302">
                      <a href="#">
                        <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true"> 33 interested</i></button>
                      </a>
                      <a href="#">
                        <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--End of content-5-->
            </section>

          </div>
        </div>
        <!--end of col-md-9 -->
        </aside>
      </div>
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
            <a href="#">
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
            <a href="#">
              <p>-Contact Us</p>
            </a>
            <a href="#" class="last-child12892">
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
