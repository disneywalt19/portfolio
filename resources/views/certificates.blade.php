@include('layouts.header')
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
                    <p class="animated flash">C E R T I F I C A T E S</p>
                </div>

                <div class="links">
                    
                    <a href="http://localhost/home"><i class="fas fa-house-damage flash"></i>Home</a>
                    
                    
                    <a href="http://localhost/projects"><i class="fas fa-project-diagram flash"></i>Projects</a>
                    
                    
                    <a href="http://localhost/certificates"><i class="fas fa-certificate flash"></i>Certificates</a>
                    
                    <a href="http://localhost/about"><i class="fas fa-eject flash"></i>About Me</a>
                    
                    <a href="http://localhost/contact"><i class="fas fa-file-signature flash"></i>Contact Me</a>
                    
                    <a href="http://localhost/courses"><i class="fab fa-leanpub flash"></i>Courses Finished</a>
                    
                    <a href="http://localhost/skills"><i class="fab fa-leanpub flash"></i>My Skills</a>
                    
                    <a href="https://github.com/disneywalt19"><i class="fab fa-github flash"></i>My GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
