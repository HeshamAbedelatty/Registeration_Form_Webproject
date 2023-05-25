<!DOCTYPE html>

<head>
<style>
* {
    padding: 0px;
    margin: 0px;

}

/* .section1 .container2 { */
    /* margin: auto;
    padding: 50px 0px; */

/* } */

.container .form h1 {
    padding: 10px 20px;
    margin-bottom: 25px;
    font-weight: bold;
    font-size: 30px;
    background-color: rgb(47, 171, 225);
    color: white;
    border-radius: 20px;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.container .form {
    width: 50%;
    margin: auto;
    text-align: center;
    border-radius: 20px;
    background: linear-gradient(rgb(44, 102, 126)13% 100%);
}

input {
    font-size: 20px;
    border-radius: 15px;
    border-color: inherit;
    margin-bottom: 25px;
    color: gray;
    padding: 10px;
    /* display: block; */

}


.pure-button {
    font-size: 27px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bold;
    border-radius: 15px;
    margin-bottom: 20px;
    padding: 10px;
    background-color: rgb(33, 20, 55);
    color: aliceblue;
}

.form-upload {
    display: flex;
    flex-direction: row;
    text-align: center;
    margin: 0px 50px;
}

.API_button {
    /* font-size: 20px; */
    font-family: Georgia, 'Times New Roman', Times, serif;
    /* font-weight: bold; */
    border-radius: 15px;
    margin-top: 10px;
    padding: 7px;
    background-color: rgb(33, 20, 55);
    color: aliceblue;
}
/* .API_button{

} */

.img_link {
    border: 0.5px solid black;
    border-radius: 15px;
    margin-right: 10px;
}

.Birth {
    display: inline-block;
}

/* header */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:rgb(11, 13, 48);
    padding: 10px;
    margin-bottom: 50px;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    margin: 0 100px;
}

nav ul {
    list-style: none;
    margin: 0 100px;
    /* padding: 0; */
}

nav li {
    display: inline-block;
    margin: 0 10px;
}

nav a {
    text-decoration: none;
    color: rgb(202, 202, 206);
    font-size: 16px;
    font-weight: bold;
}

nav a:hover {
    color: rgb(11, 13, 48);
}

.dropdown-menu {

    margin: 0 22px;
    padding: 15px 18px;
    transition: background-color 200ms ease;
    border-radius: 12px;
    background-color: #fff;
    align-items: center;
    color: inherit;
    border: 0;
    box-shadow: 2px 2px 2px 2px rgba(3, 3, 3, 0.137);
    /* background: transparent; */
    font-size: 100%;
    vertical-align: baseline;

}

.dropdown:hover .dropdown-menu {
    display: block;
}

footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(11, 13, 48);
    padding: 10px;
    margin-bottom: 50px;
}
.main {
    /* background-color: rgb(102, 19, 84); */
    background-color: rgb(11, 13, 48);
    padding: 30px 0px;
    margin-top: 50px;
    /* position: fixed;
    bottom: 0;
    right: 0;
    left: 0; */
}

.container2 {
    width: 53%;
    margin: auto;

}

.container2 .footer {
    display: flex;
    /* position: fixed;
    bottom: 0; */
    flex-direction: column;
}

.container2 .title {
    text-align: center;
    color: rgba(250, 235, 215, 0.527);
}

.container2 .links {
    display: flex;
    flex-direction: row;
    text-align: center;
}

.container2 .link {
    margin-top: 20px;
    margin-right: 20px;
    text-align: center;
    border: 1px solid antiquewhite;
    border-radius: 30px;
    padding: 20px;
    font-size: larger;
    font-weight: bold;
}

a {
    text-decoration: none;
    color: antiquewhite;
}

a:link {
    color: antiquewhite;
}

a:hover {
    color: rgb(74, 63, 50);
}

#twitter {
    margin-right: 0px;
}
</style>
    <!-- <link rel="stylesheet" href="D:\Third year\Web based\Registeration_Form_Webproject\Web_Based_Project\resources\css\stylesheet.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;family=Poppins:wght@600;700&amp;display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration Form Application</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
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
</header> 
<body>
    <div>
    <a href="{{ route('converter','ar')}}"> AR </a></br>
    <a href="{{ route('converter','en')}}"> EN </a>
    </div>
    

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