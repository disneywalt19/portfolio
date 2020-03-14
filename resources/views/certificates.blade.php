<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PORTFOLIO</title>
        
        <!-- Font Awesome -->
       <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" data-mutate-approach="sync"></script>
        
        <!--FontAwesome -->
        <link href="../../../public/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("../../public/img/cables.jpg");
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <p class="animated bounce">C E R T I F I C A T E S</p>
                </div>

                <div class="links">
                    
                    <i class="fas fa-house-damage"></i>
                    <a href="http://localhost/home">Home</a>
                    
                    <i class="fas fa-project-diagram"></i>
                    <a href="http://localhost/projects">Projects</a>
                    
                    <i class="fas fa-certificate"></i>
                    <a href="http://localhost/certificates">Certificates</a>
                    
                    <i class="fas fa-eject"></i>
                    <a href="http://localhost/about">About Me</a>
                    
                    <i class="fas fa-file-signature"></i>
                    <a href="http://localhost/contact">Contact Me</a>
                    
                    <i class="fab fa-leanpub"></i>
                    <a href="http://localhost/courses">Courses Finished</a>
                    
                    <i class="fab fa-github"></i>
                    <a href="https://github.com/disneywalt19">My GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
