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
                    <p class="animated flash">A B O U T &nbsp;&nbsp; M E</p>
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
                <br>
                This is The About Me page:
                <br>
                <br>
                Hello, 
My name is Łukasz Rutkowski. Since ever my dream is working in IT. I have always been fascinated by computer technologies, software and hardware. 
I have skills in variety of systems like Linux or Windows. Nowadays I decided to expand my skills in programming field, I know the basics of PHP, PHP OOP, MYSQL , HTML, CSS, JavaScript, JSON, JQUERY, BOOTSTRAP, FONTAWESOME, GIT, GITHUB,  and still gainning new knowledge about it. All my free time i spend to learn more to have more information about programming and to be one of the best web developers. I have finish a lot of courses from udemy (have a lot of certificates and spend many hours to make it. I can prove this by showing You my real making by my own projects. Also i was learning by programmist who has a lot of experience in working in many companies.
I have graduated from informatic school "Computer networks". 
Being hired at yours company would be part of making my dream come true and works in the field I am so excited about. I am fully devoted and open for any trainning that is neccessary to improve my skills. 
I am higlhy reliable person, ready to work at any time. Choosing me for this position I can assure you will choose the worker who will with satisfaction and full commitment fulfill the duties.
                         
                </div>
                
            </div>
        </div>
    </body>
</html>
