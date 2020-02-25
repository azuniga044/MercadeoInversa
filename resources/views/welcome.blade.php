<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mercadeo Inverso</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
               /* background-color: #fff;*/
               background-image: url("/images/welcome2.png");
               background-size: 100% 100%;
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
                color: #272C66;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /*Menu*/

            h2{

    text-align: center;
    font-weight: 100;
    font-size: 50px;

    margin-bottom: 20px;
    margin-top: 20px;
    background: blue;
    color: white;
    font-weight: 600;
    opacity: 0.5;
    padding: 10px;
    border-radius: 15px;
}

nav{
  width: 750px;
  margin: 1em auto;
}

ul{
  margin: 0px;
  padding: 0px;
  list-style: none;
}

ul.dropdown{
  position: relative;
  width: 100%;
}

ul.dropdown li{
  font-weight: bold;
  float: left;
  width: 180px;
  position: relative;
  background: #ecf0f1;
}

ul.dropdown a:hover{
  color: #000;
}

ul.dropdown li a {
  display: block;
  padding: 20px 8px;
  color: #34495e;
  position: relative;
  z-index: 2000;
  text-align: center;
  text-decoration: none;
  font-weight: 300;
}

ul.dropdown li a:hover,
ul.dropdown li a.hover{
  background: #3498db;
  position: relative;
  color: #fff;
  transition:0.5s ease;
}

ul.dropdown ul{
 display: none;
 position: absolute;
  top: 0;
  left: 0;
  width: 180px;
  z-index: 1000;
}


ul.dropdown ul li {
  font-weight: normal;
  background: #f6f6f6;
  color: #000;
  border-bottom: 1px solid #ccc;
}

ul.dropdown ul li a{
  display: block;
  color: #34495e !important;
  background: #eee !important;
}

ul.dropdown ul li a:hover{
  display: block;
  background: #3498db !important;
  color: #fff !important;
}

ul.dropdown ul li a:hover{
  display: block;
  background: #3498db;
  color: #fff;
}

.drop > a{
  position: relative;
}

.drop > a:after{
    content: "";
    position: absolute;
    right: 11px;
    top: 46%;
    border-left: 10px solid transparent;
    border-top: 10px solid #333;
    border-right: 10px solid transparent;
    z-index: 999;
}

.drop > a:hover:after{
  content:"";
   border-left: 10px solid transparent;
  border-top: 10px solid #fff;
  border-right: 10px solid transparent;
}
            /*Fin menu*/
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
               <!-- <nav>
                        <ul class="dropdown">
                                    <li class="drop"><a href="#">Clientes</a>
                                        <ul class="sub_menu">
                                                    <li><a href="#">Iniciar sesión</a></li>
                                                    <li><a href="#">Registrar</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="#">Empresas</a>
                                        <ul class="sub_menu">
                                                    <li><a href="#">Iniciar sesión</a></li>
                                                    <li><a href="#">Registrar</a></li>
                                        </ul>
                                    </li>
                                </ul>

                        </nav>
                    -->
            @endif

            <div class="content">
            </div>
        </div>
    </body>
</html>
