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
                    <p class="animated flash">M Y &nbsp;&nbsp;P O R T F O L I O</p>
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
                
                <div class="description">
                <p class="bounceInUp desc">
                    SKILLS:<br>
- PHP, PHP OOP, MYSQL , HTML, CSS, JavaScript, JSON, JQUERY, BOOTSTRAP, FONTAWESOME, GIT, GITHUB, C++<br>
- KNOWLEDGE OF PC STRUCTURE<br>
- KNOWLEDGE OF OPERATING STSTEMS WINDOWS/LINUX<br>
- COMMUNICATIVE ENGLISH AND POLISH LANGUAGE<br>
- DRIVING LICENSE<br>
- ABILITY TO WORK UNDER PRESSURE<br>
- PROBLEM SOLVING<br>
<br>
SOFT SKILLS:<br>
- LOVE TO WORK WITH PC AND PROGRAMMING<br>
- HUGE MOTIVATION TO WORK<br>
- THE DESIRE TO DEVELOP<br>
- DETERMINATION<br>
- AVAILABILITY<br>
- RESISTANCE TO STRESS<br>
- COMMUNICATION<br>
- RESPONSIBILITY<br>
- CARING FOR HISH QUALITY<br>
- PUNCTUALITY<br>
- BUILDING POSITIVE RELATIONSHIPS<br>
                </p>
                </div>
                
            </div>
        </div>
    </body>
</html>
