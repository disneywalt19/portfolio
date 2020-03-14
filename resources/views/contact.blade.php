<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PORTFOLIO</title>
        
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        
        <!-- Font Awesome -->
       <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" data-mutate-approach="sync"></script>
        
        <!--FontAwesome -->
<!--        <link href="../../../public/css/app.css" rel="stylesheet">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
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
                    <p class="animated bounce">C O N T A C T &nbsp;&nbsp; M E</p>
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
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
