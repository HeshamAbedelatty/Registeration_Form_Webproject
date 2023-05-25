<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
<header>
  <nav>
            <ul>
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i>HOME</a></li>
                <li class="dropdown"><a href="#">SUPPORT</a>
                    <ul class="dropdown-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi amet, dolorem voluptates,
                            sint libero nobis exercitationem similique ducimus necessitatibus consectetur unde
                            molestiae corrupti saepe est omnis maiores consequatur veniam enim?</p>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">ABOUT</a>
                    <ul class="dropdown-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi amet, dolorem voluptates,
                            sint libero nobis exercitationem similique ducimus necessitatibus consectetur unde
                            molestiae corrupti saepe est omnis maiores consequatur veniam enim?</p>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">BLOG</a>
                    <ul class="dropdown-menu">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi amet, dolorem voluptates,
                            sint libero nobis exercitationem similique ducimus necessitatibus consectetur unde
                            molestiae corrupti saepe est omnis maiores consequatur veniam enim?</p>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><i class="fa fa-envelope"></i>CONTACT US</a>
                    <ul class="dropdown-menu" style="font-size: 10px;">
                        <a href="mailto:web_e@gmail.com" style="text-decoration: none;font-size: 12px;"><i class="fa fa-envelope"></i>web_e@gmail.com</a>
                        <br>
                        <a href="#" style="text-decoration: none;font-size: 13px;">
                            <p><i class="fa fa-mobile-phone"></i>123-456-789</p>
                        </a>
                    </ul>
                </li>
            </ul>
        </nav>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration Form Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <a href="{{ route('converter','ar')}}"> AR </a></br>
    <a href="{{ route('converter','en')}}"> EN </a>

    <div class="container mt-5">

        <h1 class="text-primary mt-3 mb-4 text-center"><b>{{__('msg.Registeration Form Application')}}</b></h1>

        @yield('content')

    </div>

</body>

<footer>
  <div class="footer">
                <div class="title">
                    <h3>or Sign in with...</h3>
                </div>
                <div class="links">
                    <div id="Google" class="link"><a class="Sitem" href="https://www.mail.google.com/"><i class="fab fa-google"></i> Sign in with Google</a></div>
                    <div id="facebook" class="link"><a class="Sitem" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i> Sign in with Facebook </a></div>
                    <div id="twitter" class="link"><a class="Sitem" href="https://www.twitter.com/"><i class="fab fa-twitter"></i> Sign in with Twitter </a></div>
                    <!-- <div id="linkedin" class="link"><a class="Sitem" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i> Sign in with linkedin</a></div> -->
                </div>
            </div>
    <p>&copy; 2023 Registration Page. All rights reserved.</p>
  </footer>

</html>