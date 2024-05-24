<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>TinyFis</title>
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>-->


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href='D:\Design WEB\Design Kingthemes\fullcss.css'/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>TinyFis</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
        integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/menuplantilla.css">
    <!-- Script Close Menu header Responsive-->
    <script>
        $(document).ready(function(){
           $("#close-menu-responsive").click(function(){
               $("#show-responsive-header").hide(function(){
                 $(".responsive-menu-header").animate({
                   right: '500px',
                 });
               });
           });
           $(".button-menu-header").click(function() {
             $("#show-responsive-header").toggle(function(){
               $(".responsive-menu-header").animate({
                 right: '0'
               });
             });
           });
           $(".open-menu").click(function(){
             $("#show-responsive-header").show(function(){
               $(".responsive-menu-header").animate({
                 right: '0',
               });
             });
           });
           $("#hide-menu-desktop").click(function(){
             $("#show-responsive-header").show(function(){
               $(".responsive-menu-header").animate({
                 right: '0',
               });
             });
           });
           $(".open-style-post").click(function(){
             $(".sub-style").slideToggle();
           });
           $(".active-menu-mobile").click(function(){
             $(".menu-two-mobile").slideToggle();
           });
           $(".style-desktop").click(function(){
             $(".mega-black-menu").slideToggle();
           });
       });
       </script>
       <!-- End JS menu Header-->
</head>
<body>
    <header> <!-- Menu header-->
    <!-- Menu responsive-->

        <div class="responsive-menu-header" id="show-responsive-header">
            <ul class="menu-responsive">
                <li id="hidden-menu-responsive"><button id="close-menu-responsive" class="close-responsive-menu" type="button"><i class="fa fa-times fa-2x"></i></button></li>
                <li class="class-search" id="active-search-responsive"><form class="menu-search"><input class="menu-search-mobile" type="search" placeholder="search..."></form></li>
                <li class="menu-responsive-v1"><a href="#">News</a></li>
                <li class="menu-responsive-v1"><a href="#">Video</a></li>
                <li class="menu-responsive-v1"><a href="#">Images</a></li>
                <li class="menu-responsive-v1"><a href="#">Badges</a></li>
                <li class="menu-responsive-v1"><a href="#">Categories</a></li>
                <li class="menu-responsive-v1"><a href="#">Categories v2</a></li>
                <li class="menu-responsive-v1"><a href="#">Hot</a></li>
                <li class="menu-responsive-v1"><a href="#">NSFW</a></li>
                <li class="menu-responsive-v1"><a href="#">Reactions</a></li>
                <li class="menu-responsive-v1"><a href="#">Samples Page</a></li>
                <li class="menu-responsive-v1"><a href="#">Trend</a></li>
                <li class="menu-responsive-v1"><a href="#">Users</a></li>
            </ul>
        </div>
  
   <!-- Menu responsive-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light main-menu-header">
            <button type="button" class="button-menu-header"><i class="fa fa-bars fa-lg"></i></button>
            <a class="navbar-brand logo-header" href="{{ url('/')}}"><img src='http://king.kingthemes.net/wp-content/uploads/2017/02/Untitled-1-1.png' width='100%'></a>
            <!-- Logo responsive-->
            <a class="logo-responsive" href="{{ url('/')}}"><img src="http://king.kingthemes.net/wp-content/uploads/2017/02/wplogo2-1.png" width="100%"/></a>
            <!-- End Logo responsive-->

            <!-- Menu mobile-->
            <div class="position-menu-search">
                <button type="button" class="open-menu"><i class="fa fa-search"></i></button>
            </div>
            <div class="menu-users">
                <a href="#" class="active-menu-users"><i class="fa fa-user"></i></a>
            </div>
            <button class="navbar-toggler open-tablet-menu"  id="hide-menu-desktop" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto main-menu-version">
                    <li class="nav-item menu-version">
                        <a class="nav-link" href="{{ route('product.index') }}"> Todos </a>
                    </li>
                    <li class="nav-item menu-version">
                        <a class="nav-link menu-desktop-red" href=""><i class="bi bi-border-width"></i> Categorias </a>
                    </li>
                    <li>
                        <a href=""><i class="bi bi-box"></i></a>
                    </li>
                    <li class="nav-item dropdown main-menu-column">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-sliders fa-lg"></i>
                        </a>
                        <div class="dropdown-menu menu-column" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Badges</a>
                            <a class="dropdown-item" href="#">Categories</a>
                            <a class="dropdown-item" href="#">Categories v2</a>
                            <a class="dropdown-item" href="#">Hot</a>
                            <a class="dropdown-item" href="#">NSFW</a>
                            <a class="dropdown-item" href="#">Reactions</a>
                            <a class="dropdown-item" href="#">Sample Page</a>
                            <a class="dropdown-item" href="#">Trend</a>
                            <a class="dropdown-item" href="#">Users</a>
                            <a class="dropdown-item" href="#">Action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="mx-auto main-button-search">
                  <input class="form-control mr-sm-2 button-edit-search" type="search" placeholder="Buscar" aria-label="Search">
                </form>
              <!-- Para pruebas -->
                <div class="flex-center position-ref full-height main-log">
                  @if (Route::has('login'))
                    <ul class="navbar-nav mr-auto main-menu-version">
                      @auth
                        <li class="nav-item menu-verion">
                          <a class="nav-link" href="{{ url('/home') }}">Cuenta</a>
                        </li>
                      @else
                        <li class="nav-item menu-version">
                          <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                        </li>
                        @if (Route::has('register'))
                          <li class="nav-item menu-version">
                            <a class="nav-link" href="{{ 'register' }}">Registrate</a>
                          </li>
                        @endif
                      @endauth
                    </ul>
                  @endif
                </div>
      <div class='main-button'>
        <button class="btn btn-danger button-edit-plus" type="submit"><i class="fa fa-plus fa-lg"></i></button>
        <button type="button" class="btn btn-primary button-edit-login" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-user"></i> Login</button>
        <button class="btn btn-secondary button-edit-register" type="submit"><i class="fa fa-globe"></i> Register</button>
        <!-- Login
        <div class="modal fade bd-example-modal-lg login-all" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg login-all-v1">
              <div class="modal-content content-login">
                  <form class="form-login-lg">
                      <div class="text-login"><p>Log in</p></div>
                      <div class="form-group form-login-edit">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your username">
                      </div>
                      <div class="form-group form-login-edit">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Your password">
                      </div>
                      <div class="form-group form-check form-login-edit">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <div class="login-account">
                      <button type="submit" class="btn btn-primary login-submit">Iniciar</button>
                      </div>
                      <div class="form-forget-signup">
                        <p class="forget-password"><a href="#">Forget Password?</a></p>
                        <p class="signup-account">Don't have an account? <a href="#">Sign Up</a></p>
                      </div>
                    </form>
              </div>
            </div>
          </div>
           End login-->
      </div>
  </div>
</nav>
</header>
<section> <!-- Menu -->
  <div class="section-two">
    <div class="section-menu-two">
      <div class="menu-two-design">
        <div class="active-mobile-center"><!-- Start Section menu mobile 2 -->
          <div class="button-style-mobile"> 
          <button type="button" class="active-menu-mobile"><i class="fa fa-align-center"></i></button>
          </div>
          <div class="change-style-post">
            
              <button type="button" class="open-style-post"><i class="fa fa-th-large fa-lg"></i></button>
                <ul class="sub-style">
                  <li class="style-one"><button class="active-style-one"><i class="fa fa-th-large"></i></button></li>
                  <li class="style-one"><button class="active-style-two"><i class="fa fa-th"></i></button></li>
                  <li class="style-one"><button class="active-style-three"><i class="fa fa-window-maximize"></i></button></li>
                </ul>
             
            
          </div>
        </div> <!-- End Section menu mobile 2-->
        <div class="menu-two">
          <ul class="menu-row">
            <li class="sub-menu-two"><a href="#">Hot</a></li>
            <li class="sub-menu-two"><a href="#">Trend</a></li>
            <li class="sub-menu-two"><a href="#">Users</a></li>
            <li class="sub-menu-two"><a href="#">Categories</a></li>
            <li class="sub-menu-two"><a href="#">Categories v2</a></li>
            <li class="sub-menu-two"><a href="#">NSFW</a></li>
            <li class="sub-menu-two"><a href="#">Reactions</a></li>
            <li class="sub-menu-two"><a href="#">Badges</a></li>
            <li class="sub-menu-two"><a href="#">Futures <i class="fa fa-caret-down"></i></a>
              <ul class="mega-menu-row">
                <li class="mega-sub-menu"><a href="#">Sample Pages</a></li>
                <li class="mega-sub-menu"><a href="#">Posts Examples</a></li>
                <li class="mega-sub-menu"><a href="#">Users Profile</a></li>
              </ul>
            </li>
          <li class="sub-menu-two" id="black-menu"><button class="style-desktop" type="button"><i class="fa fa-th-large fa-lg"></i></button>
            <ul class="mega-black-menu">
              <li class="mega-bl"><button class="mega-style-one" type="button"><i class="fa fa-th-large"></i></a></li>
              <li class="mega-wh"><button class="mega-style-two" type="button"><i class="fa fa-th"></i></a></li>
              <li class="mega-rd"><button class="mega-style-three" type="button"><i class="fa fa-window-maximize"></i></a></li>
            </ul>
          </li>
          </ul>
        </div>
        <div class="menu-two-mobile"><!-- Section Menu Mobile V2-->
          <ul class="menu-mobile-ver2">
            <li class="sub-menu-mobile"><a href="#">Hot</a></li>
            <li class="sub-menu-mobile"><a href="#">Trend</a></li>
            <li class="sub-menu-mobile"><a href="#">Users</a></li>
            <li class="sub-menu-mobile"><a href="#">Categories</a></li>
            <li class="sub-menu-mobile"><a href="#">Categories v2</a></li>
            <li class="sub-menu-mobile"><a href="#">NSFW</a></li>
            <li class="sub-menu-mobile"><a href="#">Reactions</a></li>
            <li class="sub-menu-mobile"><a href="#">Badges</a></li>
            <li class="sub-menu-mobile"><a href="#">Futures</a></li>
            <li class="mega-menu-mobile"><a href="#">Sample Pages</a></li>
            <li class="mega-menu-mobile"><a href="#">Post Example</a></li>
            <li class="mega-menu-mobile"><a href="#">Video Post</a></li>
            <li class="mega-menu-mobile"><a href="#">Mp3 Post</a></li>
            <li class="mega-menu-mobile"><a href="#">Mp4 Post</a></li>
            <li class="mega-menu-mobile"><a href="#">News Post</a></li>
            <li class="mega-menu-mobile"><a href="#">List Post</a></li>
            <li class="mega-menu-mobile"><a href="#">Galley Post</a></li>
            <li class="mega-menu-mobile"><a href="#">Post</a></li>
            <li class="mega-menu-mobile"><a href="#">Post</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
    <div class="container-fluid main-video-post">
        <div class="row video-post-br">
            <div class="col-3"></div>
            <div class="col-lg-6 video-post">
                <iframe id="video-film" src="https://player.vimeo.com/video/50522981?app_id=122963" frameborder="0"></iframe>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</section>
<section class="main-bg-post">
    <div class="container main-content-post">
        <div class="row all-content-post">
            <div class="col-lg-8 content-post">
                <div class="content-social-share">
                    <div class="number-share"><span class="nb-share">9</span> Share</div>
                        <a href="#" class="social-share" id="css-facebook"><i class="fa fa-facebook-square fa-lg"></i></a>
                        <a href="#" class="social-share"id="css-gg"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a href="#" class="social-share"id="css-tw"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#" class="social-share"id="css-mail"><i class="fa fa-envelope fa-lg"></i></a>
                        <button type="button" class="social-more"><i class="fa fa-plus fa-lg"></i></button>
                        <div class="social-share" id="next-post">
                            <a href="#" class="next-here"><i class="fa fa-angle-right"></i></a>
                        </div>
                </div>
                <div class="none-content"></div>
                <div class="concept-content">
                    <h2>One More Beer!</h2>
                    <div class="user-interaction">
                      <a href="#" class="like-video-post"><i class="fa fa-thumbs-up"> 6</i></a>
                      <a href="#" class="category-video">Video</a>
                      <div class="futured"><i class="fa fa-rocket fa-lg"></i></div>
                      <div class="trending"><i class="fa fa-bolt fa-lg"></i></div>
                    </div>
                    <div class="title-quotes">
                      <div class="title-mini">One More Beer! – A Pedro Conti Short Movie.</div>
                      <p></p>
                      <blockquote>
                      <p>One More Beer is an independent short movie developed by Brazilian 3D artist Pedro Conti. 
                        The work was done in partnership with Alan Camilo (co-direction, storyline, animation and rigging), 
                        Alex Angelis (rigging), Lucas Leibholz (illustration), Pedro Pastoriz and Jack Rubens, members of the band “Os mustaches e os Apaches “(soundtrack), 
                        Antonio Moreno (Voice) and with renowned studio Beep Audio Post (sound design and mixing).
                      </p>
                    </blockquote>
                    </div>
                    <div class="category-interaction">
                      <div class="cate">
                      <a href="#" class="cg">animation</a>
                      <a href="#" class="cg">beer</a>
                      <a href="#" class="cg">video</a>
                      <a href="#" class="cg">vimeo</a>
                      </div>
                      <div class="info-post">
                          <span class="view-post">
                            <i class="fa fa-eye"></i>
                            200
                          </span>
                          <span class="comment-post">
                            <i class="fa fa-comment"></i>
                            20
                          </span>
                          <span class="date-time-post">
                            <i class="fa fa-clock-o"></i>
                            May 21,2017
                          </span>
                        </div>
                    </div>
                </div>
                <div class="none-content"></div>
                <div class="reactions-video-content">
                  <div class="reactions-video">
                    <p>Reactions</p>
                  </div>
                  <div class="icon-reactions">
                    <div class="reac-vd">
                      <div class="point">
                        1
                      </div>
                      <button type="button" class="button-react" id="button-like">
                        <i class="fa fa-thumbs-up"></i>
                      </button>
                    </div>
                    <div class="reac-vd">
                      <div class="point">
                        1
                      </div>
                      <button type="button" class="button-react" id="button-dislike">
                        <i class="fa fa-thumbs-down"></i>
                      </button>
                    </div>
                    <div class="reac-vd">
                      <div class="point">
                        1
                      </div>
                      <button type="button" class="button-react" id="button-star">
                        <i class="fa fa-star"></i>
                      </button>
                    </div>
                    <div class="reac-vd">
                      <div class="point">
                        1
                      </div>
                      <button type="button" class="button-react" id="button-star-half">
                        <i class="fa fa-star-half-full"></i>
                      </button>
                    </div>
                    <div class="reac-vd">
                      <div class="point">
                        1
                      </div>
                      <button type="button" class="button-react" id="button-times">
                        <i class="fa fa-times"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="author-post-video">
                  <a href="#" class="author-user"><img src="http://king.kingthemes.net/wp-content/uploads/2017/02/avatarimg_user1-1-150x150.jpg"/></a>
                  <a href="#" class="name-user"><p>king <i class="fa fa-check-circle fa-lg"></i></p></a>
                  <div class="point-user">
                    <i class="fa fa-star" title="Point"></i> <span>1055</span>
                  </div>
                  <div class="social-info-user">
                    <ul class="info-user">
                      <li class="social-info"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="social-info"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li class="social-info"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="social-info"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                  <p class="introduce-user">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                  <div class="style-office">
                    <script>function interaction() {alert("Thank you! Function to be building update");}</script>
                    <button type="button" onclick="interaction()" class="style-funny"><img src="http://king.kingthemes.net/wp-content/uploads/2018/01/pob2.png"/></button>
                    <button type="button" class="style-funny"><img src="http://king.kingthemes.net/wp-content/uploads/2018/01/cb1.png"/></button>
                    <button type="button" class="style-funny"><img src="http://king.kingthemes.net/wp-content/uploads/2018/01/fb1.png"/></button>
                    <button type="button" class="style-funny"><img src="http://king.kingthemes.net/wp-content/uploads/2018/01/pb1.png"/></button>
                  </div>
                </div>
                <div class="form-comment-video">
                  <div class="content-form">
                    <h3 id="reply-cmt">LEAVE A REPLY</h3>
                    <P id="quote-cmt">Your email address will not be published. Required fields are marked *</p>
                      <p id="text-cmt">Comment</p>
                    <div class="comment-fr">
                      <textarea id="fr-cmt-reply" name="message" rows="5" cols="20"></textarea>
                    </div>
                    <div class="fr-reactions">
                      <p id="text-react">Reactions</p>
                      <ul class="fr-seclect-react">
                        <li class="king-react">
                          <label class="react-like">
                            <input name="submit" type="submit" value="Like">
                          </label>
                        </li>
                        <li class="king-react">
                          <label class="react-love">
                            <input name="submit" type="submit" value="Love">
                          </label>
                        </li>
                        <li class="king-react">
                          <label class="react-sad">
                            <input name="submit" type="submit" value="Sad">
                          </label>
                        </li>
                        <li class="king-react">
                          <label class="react-angry">
                            <input name="submit" type="submit" value="Angry">
                          </label>
                        </li>
                      </ul>
                    </div>
                    <div class="info-user-cmt">
                      <p id="cmt-form-author"> 
                        <label>Name*</label>
                        <input name="submit" type="text" placeholder="John Cena">
                      </p>
                      <p id="cmt-form-author"> 
                          <label>Email*</label>
                        <input name="submit" type="email" placeholder="Teamdesign@abc.com">
                      </p>
                      <p id="cmt-form-author"> 
                          <label>Website*</label>
                        <input name="submit" type="text" placeholder="abc.com">
                      </p>
                    </div>
                    <p class="form-submit">
                    <input type="submit" name="submit" value="Post Comment" class="submit">
                    </p>
                  </div>
                </div>
                <div class="form-related">
                  <div class="title-related">You May Also Like</div>
                  <div class="container main-post-related">
                    <div class="row all-post-related">
                      <div class="col-md-6 post-related">
                        <div class="black-post">
                          <div class="all-content">
                            <div class="col-12 cover-content">
                              <div class="title-category-post">
                                <a class="title-post" href="#">A rather lovely thing</a>
                              </div>
                              <div class="tl-ct-post">
                                  <a class="category-post" href="#">Video</a>
                              </div>
                              <div class="futured"><i class="fa fa-rocket fa-lg"></i></div>
                              <div class="trending"><i class="fa fa-bolt fa-lg"></i></div>
                              <img src="http://king.kingthemes.net/wp-content/uploads/2017/01/475852466_1280x720-1-300x169.jpg"/>
                              <div class="info-post">
                                <span class="like-post">
                                  <i class="fa fa-thumbs-up"></i>
                                  6
                                </span>
                                <span class="view-post">
                                  <i class="fa fa-eye"></i>
                                  200
                                </span>
                                <span class="comment-post">
                                  <i class="fa fa-comment"></i>
                                  20
                                </span>
                                <span class="date-time-post">
                                  <i class="fa fa-clock-o"></i>
                                  May 21,2017
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 post-related">
                        <div class="black-post">
                          <div class="all-content">
                              <div class="col-12 cover-content">
                                <div class="title-category-post">
                                  <a class="title-post" href="#">Buy Funny Toy</a>
                                </div>
                                <div class="tl-ct-post">
                                    <a class="category-post" href="#">Video</a>
                                </div>
                                <div class="futured"><i class="fa fa-rocket fa-lg"></i></div>
                                <div class="trending"><i class="fa fa-bolt fa-lg"></i></div>
                                <img src="http://king.kingthemes.net/wp-content/uploads/2018/01/head-300x300.jpg"/>
                                <div class="info-post">
                                  <span class="like-post">
                                    <i class="fa fa-thumbs-up"></i>
                                    6
                                  </span>
                                  <span class="view-post">
                                    <i class="fa fa-eye"></i>
                                    200
                                  </span>
                                  <span class="comment-post">
                                    <i class="fa fa-comment"></i>
                                    20
                                  </span>
                                  <span class="date-time-post">
                                    <i class="fa fa-clock-o"></i>
                                    May 21,2017
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 post-related">
                            <div class="black-post">
                            <div class="all-content">
                                <div class="col-12 cover-content">
                                  <div class="title-category-post">
                                    <a class="title-post" href="#">Mp4 video demo – Evolution</a>
                                  </div>
                                  <div class="tl-ct-post">
                                      <a class="category-post" href="#">Video</a>
                                  </div>
                                  <div class="futured"><i class="fa fa-rocket fa-lg"></i></div>
                                  <div class="trending"><i class="fa fa-bolt fa-lg"></i></div>
                                  <img src="http://king.kingthemes.net/wp-content/uploads/2017/04/evolution1-1-300x169.jpg"/>
                                  <div class="info-post">
                                    <span class="like-post">
                                      <i class="fa fa-thumbs-up"></i>
                                      6
                                    </span>
                                    <span class="view-post">
                                      <i class="fa fa-eye"></i>
                                      200
                                    </span>
                                    <span class="comment-post">
                                      <i class="fa fa-comment"></i>
                                      20
                                    </span>
                                    <span class="date-time-post">
                                      <i class="fa fa-clock-o"></i>
                                      May 21,2017
                                    </span>
                                  </div>
                                </div>
                              </div>
                              </div>
                          </div>
                          <div class="col-md-6 post-related">
                              <div class="black-post">
                              <div class="all-content">
                                  <div class="col-12 cover-content">
                                    <div class="title-category-post">
                                      <a class="title-post" href="#">Youtube – EDEN – Billie Jean</a>
                                    </div>
                                    <div class="tl-ct-post">
                                        <a class="category-post" href="#">Video</a>
                                    </div>
                                    <div class="futured"><i class="fa fa-rocket fa-lg"></i></div>
                                    <div class="trending"><i class="fa fa-bolt fa-lg"></i></div>
                                    <img src="http://king.kingthemes.net/wp-content/uploads/2017/01/maxresdefault-1-300x169.jpg"/>
                                    <div class="info-post">
                                      <span class="like-post">
                                        <i class="fa fa-thumbs-up"></i>
                                        6
                                      </span>
                                      <span class="view-post">
                                        <i class="fa fa-eye"></i>
                                        200
                                      </span>
                                      <span class="comment-post">
                                        <i class="fa fa-comment"></i>
                                        20
                                      </span>
                                      <span class="date-time-post">
                                        <i class="fa fa-clock-o"></i>
                                        May 21,2017
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                </div>
                            </div>
                    </div>
                    <br />
                    <br />
                  </div>
                </div>
            </div>
            <div class="col-lg-4 recent-post">
              <div class="title-recent-post">Recent Posts</div>
              <div class="container main-recent">
                <div class="row cover-recent-post">
                  <div class="col-12 content-recent-post">
                    <div class="king-cover">
                      <div class="col-12 king-pd">
                      <div class="title-recent">
                      <a href="#">One More Beer!</a>
                      </div>
                      <div class="cate-recent">
                        <a href="#">Video</a>
                      </div>
                      <div class="futured"><i class="fa fa-rocket fa-lg"></i></div>
                      <div class="trending"><i class="fa fa-bolt fa-lg"></i></div>
                      <img src="http://king.kingthemes.net/wp-content/uploads/2017/01/348090111_1280x693-1-1024x554.jpg" width="100%"/>
                      <div class="info-post">
                          <span class="like-post">
                            <i class="fa fa-thumbs-up"></i>
                            6
                          </span>
                          <span class="view-post">
                            <i class="fa fa-eye"></i>
                            200
                          </span>
                          <span class="comment-post">
                            <i class="fa fa-comment"></i>
                            20
                          </span>
                          <span class="date-time-post">
                            <i class="fa fa-clock-o"></i>
                            May 21,2017
                          </span>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-12 content-recent-post">
                    <div class="king-cover">
                      <div class="col-12 king-pd">
                      <div class="title-recent">
                      <a href="#">A rather lovely thing</a>
                      </div>
                      <div class="cate-recent">
                        <a href="#">Video</a>
                      </div>
                      <div class="futured"><i class="fa fa-rocket fa-lg"></i></div>
                      <div class="trending"><i class="fa fa-bolt fa-lg"></i></div>
                      <img src="http://king.kingthemes.net/wp-content/uploads/2017/01/475852466_1280x720-1-1024x576.jpg" width="100%"/>
                      <div class="info-post">
                          <span class="like-post">
                            <i class="fa fa-thumbs-up"></i>
                            6
                          </span>
                          <span class="view-post">
                            <i class="fa fa-eye"></i>
                            200
                          </span>
                          <span class="comment-post">
                            <i class="fa fa-comment"></i>
                            20
                          </span>
                          <span class="date-time-post">
                            <i class="fa fa-clock-o"></i>
                            May 21,2017
                          </span>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-12 content-recent-post">
                    <div class="king-cover">
                      <div class="col-12 king-pd">
                      <div class="title-recent">
                      <a href="#">Buy Funny Toy</a>
                      </div>
                      <div class="cate-recent">
                        <a href="#">Video</a>
                      </div>
                      <div class="futured"><i class="fa fa-rocket fa-lg"></i></div>
                      <div class="trending"><i class="fa fa-bolt fa-lg"></i></div>
                      <img src="http://king.kingthemes.net/wp-content/uploads/2018/01/head-1024x1024.jpg" width="100%"/>
                      <div class="info-post">
                          <span class="like-post">
                            <i class="fa fa-thumbs-up"></i>
                            6
                          </span>
                          <span class="view-post">
                            <i class="fa fa-eye"></i>
                            200
                          </span>
                          <span class="comment-post">
                            <i class="fa fa-comment"></i>
                            20
                          </span>
                          <span class="date-time-post">
                            <i class="fa fa-clock-o"></i>
                            May 21,2017
                          </span>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-12 content-recent-post">
                    <div class="king-cover">
                      <div class="col-12 king-pd">
                      <div class="title-recent">
                      <a href="#">Simple news post</a>
                      </div>
                      <div class="cate-recent">
                        <a href="#">Video</a>
                      </div>
                      <div class="futured"><i class="fa fa-rocket fa-lg"></i></div>
                      <div class="trending"><i class="fa fa-bolt fa-lg"></i></div>
                      <img src="http://king.kingthemes.net/wp-content/uploads/2017/01/what-is-sales-activity-management-1.jpg" width="100%"/>
                      <div class="info-post">
                          <span class="like-post">
                            <i class="fa fa-thumbs-up"></i>
                            6
                          </span>
                          <span class="view-post">
                            <i class="fa fa-eye"></i>
                            200
                          </span>
                          <span class="comment-post">
                            <i class="fa fa-comment"></i>
                            20
                          </span>
                          <span class="date-time-post">
                            <i class="fa fa-clock-o"></i>
                            May 21,2017
                          </span>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-12 content-recent-post">
                    <div class="king-cover">
                      <div class="col-12 king-pd">
                      <div class="title-recent">
                      <a href="#">Mp3 music post - Barton Springs</a>
                      </div>
                      <div class="cate-recent">
                        <a href="#">Video</a>
                      </div>
                      <div class="futured"><i class="fa fa-rocket fa-lg"></i></div>
                      <div class="trending"><i class="fa fa-bolt fa-lg"></i></div>
                      <img src="http://king.kingthemes.net/wp-content/uploads/2017/04/girl_with_headphones_2-wallpaper-1152x720-1-1024x621.jpg" width="100%"/>
                      <div class="info-post">
                          <span class="like-post">
                            <i class="fa fa-thumbs-up"></i>
                            6
                          </span>
                          <span class="view-post">
                            <i class="fa fa-eye"></i>
                            200
                          </span>
                          <span class="comment-post">
                            <i class="fa fa-comment"></i>
                            20
                          </span>
                          <span class="date-time-post">
                            <i class="fa fa-clock-o"></i>
                            May 21,2017
                          </span>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 copyright">
        <div class="copyright-info">
        <p>© 2017 King . All Rights Reserved.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 social-footer-end">
        <div class="social-footer">
          <ul class="list-social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-github-alt"></i></a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--<script type="text/javascript" src="./js/ani.js"></script>-->
</body>
</html>