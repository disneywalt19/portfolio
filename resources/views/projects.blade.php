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
                    <p class="animated flash">P R O J E C T S</p>
                </div>

                <div class="links">
                    <a href="http://localhost/home"><i class="fas fa-house-damage text-light"></i>Home</a>
                    
                    
                    <a href="http://localhost/projects"><i class="fas fa-project-diagram"></i>Projects</a>
                    
                    
                    <a href="http://localhost/certificates"><i class="fas fa-certificate"></i>Certificates</a>
                    
                    <a href="http://localhost/about"><i class="fas fa-eject"></i>About Me</a>
                    
                    <a href="http://localhost/contact"><i class="fas fa-file-signature"></i>Contact Me</a>
                    
                    <a href="http://localhost/courses"><i class="fab fa-leanpub"></i>Courses Finished</a>
                    
                    <a href="http://localhost/skills"><i class="fab fa-leanpub"></i>My Skills</a>
                    
                    <a href="https://github.com/disneywalt19"><i class="fab fa-github"></i>My GitHub</a>
                </div>
            <br><br>
            <div class="description">
                <p class="animated">
                
                MY WEBSITES AND PROJECTS:<br><br>
- MY PORTFOLIO SITE: www.<br>
- GITHUB: www.github.com/disneywalt19<br>
- OMNIFOOD SITE: www.<br>
- SHAREPOSTS: www.<br>
- CMS: www.<br>
                    </p>
</div>
                </div>
        </div>
    </body>
</html>