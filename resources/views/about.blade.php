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
        <link href="../../../public/css/app.css" rel="stylesheet">
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
                    <p class="animated flash">A B O U T &nbsp;&nbsp; M E</p>
                </div>

                <div class="links">
                    
                    <a href="http://localhost/home"><i class="fas fa-house-damage flash"></i>Home</a>
                    
                    
                    <a href="http://localhost/projects"><i class="fas fa-project-diagram flash"></i>Projects</a>
                    
                    
                    <a href="http://localhost/certificates"><i class="fas fa-certificate flash"></i>Certificates</a>
                    
                    <a href="http://localhost/about"><i class="fas fa-eject flash"></i>About Me</a>
                    
                    <a href="http://localhost/contact"><i class="fas fa-file-signature flash"></i>Contact Me</a>
                    
                    <a href="http://localhost/courses"><i class="fab fa-leanpub flash"></i>Courses Finished</a>
                    
                    <a href="https://github.com/disneywalt19"><i class="fab fa-github flash"></i>My GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
