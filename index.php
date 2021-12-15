<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <a class="navbar-brand" href="Main_index.html"><img src="image/logo.png" class="img-responsive"width="30%" h alt="Logo"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav"> </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="Forum_ask_question.html" target="_blank">Ask Question</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Question <span class="caret"></span></a>
              <ul class="dropdown-menu animated zoomIn">
                <li><a href="Forum_category.html" target="_blank">Question Categories</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
              <ul class="dropdown-menu animated zoomIn">
                <li><a href="Forum_user.html" target="_blank">All User </a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games <span class="caret"></span></a>
              <ul class="dropdown-menu animated zoomIn">
                <li><a href="Forum_logIn.html" target="_blank">Login</a></li>
                <li><a href="Forum_contact_us.html" target="_blank"> Contact Us</a></li>
                <li><a href="Forum_ask_question.html" target="_blank"> Ask Question </a></li>
                <li><a href="Forum_post-deatils.html" target="_blank"> post-Details </a></li>
                <li><a href="#" target="_blank"> User Question </a></li>
                <li><a href="#" target="_blank"> Category </a></li>
                <li><a href="#" target="_blank"> 404 </a></li>
              </ul>
            </li>
            <li><a href="Forum_contact_us.html" target="_blank">Contact us</a></li>
            <li>
              <img class="profile-picture" src="image/M23.jpg" alt="">
            </li>
            <li><a href="#" target="_blank"> Pranab Chakma</li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>


  <!--======= welcome section on top background=====-->
  <section class="welcome-part-one">
    <div class="container">
      <div class="welcome-demop102 text-center">
        <h2>Welcome to Trolland </h2>
        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque
          <br> habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit</p>
        <div class="button0239-item">
          <a href="#">
            <button type="button" class="aboutus022">About Us</button>
          </a>
          <a href="#">
            <button type="button" class="join92">Join Now</button>
          </a>
        </div>
        <div class="form-style8292">
          <div class="input-group"> <span class="input-group-addon"><i class="fa fa-pencil-square" aria-hidden="true"></i></span>
            <input type="text" class="form-control form-control8392" placeholder="Ask any question and you be sure find your answer ?"> <span class="input-group-addon"><a href="#">Ask Now</a></span> </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ======content section/body=====-->
  <section class="main-content920">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div id="main">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">Recent Question</label>
            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">Most Response</label>
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3">Recently Bought</label>
            <input id="tab4" type="radio" name="tabs">
            <label for="tab4">Bought</label>
            <input id="tab5" type="radio" name="tabs">
            <label for="tab5">Recent Post</label>

            <!--  End of content-1------>
            <section id="content4">
              <!--Content Section 1-->
              <div class="question-type2033">
                <div class="row">
                  <div class="col-md-1">
                    <div class="left-user12923 left-user12923-repeat">
                      <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> </div>
                  </div>
                  <div class="col-md-9">
                    <div class="right-description893">
                      <div id="que-hedder2983">
                        <h3><a href="Forum_post-deatils.html" target="_blank">This is my first Product</a></h3>
                      </div>
                      <div class="ques-details10018">
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                      </div>
                      <hr>
                      <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-check check-color329" aria-hidden="true"> Bought</i></a> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5</i> </a> <a href="#"><i class="fa fa-folder"
                            aria-hidden="true"> Price</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-comment" aria-hidden="true"> 5 Comment</i></a> <a href="#"><i
                            class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </a> </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="ques-type302">
                      <a href="#">
                        <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true"> 5 interested</i></button>
                      </a>
                      <a href="#">
                        <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--End of content-4-->
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
        <div id="custom-search-input">
          <div class="input-group col-md-12"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <input type="text" class="  search-query form-control user-control30" placeholder="Search here...." /> <span class="input-group-btn">
              <button class="btn btn-danger" type="button">
                <span class=" glyphicon glyphicon-search"></span> </button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="footer-part">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info-part-one320">
            <h4>Where We Are ?</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu.</p>
            <h4>Address :</h4>
            <p>1254,Road2,Motijhil
              <br> Dhaka,1200.</p>
            <h4>Support :</h4>
            <p>Support Telephone No : +8801645555345167</p>
            <p>Support Email Account : WebLand@gmail.com</p>
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
              <p>-Edit Profile</p>
            </a>
            <a href="#">
              <p>-Page</p>
            </a>
            <a href="#">
              <p>-Contact Us</p>
            </a>
            <a href="#" class="last-child12892">
              <p>-Buy now</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-part-three320">
            <h4>Popular Questions</h4>
            <div class="news-info209">
              <h5>You Noob?</h5>
              <p>Just ask</p> <small>July 16, 2017</small>
            </div>
            <div class="news-info209">
              <h5>How to dance</h5>
              <p> Dance</p> <small>July 16, 2017</small>
            </div>
            <div class="news-info209">
              <h5>How to find garena</h5>
              <p>https//garena.com</p> <small>July 16, 2017</small>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-part-four320">
            <h4>Latest Tweets</h4>
            <div class="tweet-details29">
              <p><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="#"> World of tanks</a></p> <small>about 2 weeks ago</small>
            </div>
            <div class="tweet-details29">
              <p><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="#"> World of Warcraft</a></p> <small>about 2 weeks ago</small>
            </div>
            <div class="tweet-details29">
              <p><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="#"> Riot</a></p> <small>about 2 weeks ago</small>
            </div>
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
