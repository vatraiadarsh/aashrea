<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


body{
    background-image:url(homepage.jpg);
    background-size: 100%;
    }


#mySidenav a {
position: absolute;
left: -80px;
transition: 0.6s;
padding: 15.5px;
width: 115px;
text-decoration: none;
font-size: 20px;
color: white;
border-radius: 0 9px 14px 0;
}

#mySidenav a:hover {
left: 0;
}

#about {
top: 140px;
background-color: #3B8400;
}

#courses{
top: 200px;
background-color: #008476;
}

#contactus{
top: 260px;
background-color: #B91502 ;
}

#login {
top: 320px;
background-color: #555
}
</style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <img src="aibtlogo1.png" alt="homepage" style="width:600px; height:90px;">
		<div id="mySidenav" class="sidenav">
  <a href="{{url('about-us')}}" id="about">About</a>
  <a href="{{url('courses')}}" id="courses">Courses</a>
  <a href="{{url('contact-us')}}" id="contactus">Contact</a>

        </div>
    </body>
</html>
