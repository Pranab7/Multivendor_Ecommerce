
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

                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orders<span class="caret"></span></a>
                    <ul class="dropdown-menu animated zoomIn">
                    <li><a href="/buying" >My Orders (buying)</a></li>
                    <li><a href="/selling" >My Orders (selling)</a></li>
                    </ul>
                </li>

                <li><a href="#contact">Contact us</a></li>

                @if(Auth::user())
                
                <li class="dropdown" style="margin-left: 30px"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu animated zoomIn">
                    <li><a href="/editProfile" > Edit Profile </a></li>
                    <li><a href="/post">post </a> </li>
                    <li><a href="{{ route('dashboard') }}" > Dashboard </a></li>
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


        <section class="container">
            <div class="post_form">
             
                  
             
                <form method="post" action="{{ route('edit') }}" enctype="multipart/form-data" >    
                    @csrf 
                    <input type="hidden"  name="user_id" 
                
                     value="{{ Auth::user()->id }}"
                   
                      />
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <img style="width: 200px; height: 200px;object-fit: cover;margin-bottom: 10px"  
                        
                            @if(empty($userInfo)) 
                            src="{{ asset('image/default.png') }}"
                            @else
                            src="{{ asset('storage') }}/{{$userInfo['user_image']}}"
                            @endif
                         
                            alt="profile image" />
                            <input type="file" name="user_image" class="form-control" id="customFile" />
                        </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label">
                                Name
                            </label>
                            <div class="col-sm-10">
                            <input type="text" name="user_name" class="form-control" id="text" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                   <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="staticEmail" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Phone No</label>
                        <div class="col-sm-10">
                        <input type="text" name="phone_no" class="form-control" id="inputPassword"
                        @isset($userInfo)
                         value="{{$userInfo['phone_no']}}"
                         @endisset
                         >
                        </div>
                    </div>
                   
                    <button type="submit" style="float: right;" class="btn btn-primary">Change</button>
                </form>

            </div> 
        
        </section>

        </div> 
        <!--    footer -->
        <section class="footer-part">
        <div class="container">
            <div class="row">
            <div class="col-md-3">
                <div class="info-part-one320">
                <h4>About us ?</h4>
                <p>Here you can buy or sell your games.</p>
                <h4>Address :</h4>
                <p>1254,Road2,Kamalapur
                    <br> Dhaka,1200.</p>
                <h4>Support :</h4>
                <p>Support Telephone No : +8801868535004</p>
                <p>Support Email Account : GameonFire@gmail.com</p>
                <p>info@example.com</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-part-two320">
                <h4>Quick Links</h4>
                <a href="#">
                    <p>-Home</p>
                </a>
                <a href="#">
                    <p>-Ask Question</p>
                </a>
                <a href="#">
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
            <div class="col-md-3" id="contact">
            <form>
                <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
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
