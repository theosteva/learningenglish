@extends('layouts.app')

@section('content')

    <section class="banner">

    <section class="banner">
        <img src="{{asset('images/banner.jpg')}}"  width="100%">
        </div>
    </section>



    <section class="benefits">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        BENEFITS YOU'LL GET IN OUR COURSE
                    </p>
                    <h2 class="primary-header">
                        Learn Faster & Better
                    </h2>
                    <p class="support">
                    Explore our site to improve your English with our courses, learning-videos and quiz.<br> With our varied selection of learning materials, you can practise your English faster and better.
                        </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-2.png')}}" class="icon" alt="">
                        <h3 class="title">
                            <b>1-1 Class & Mentoring</b>
                        </h3>
                        <p class="support">
                            We will ensure that you will get what you really do need
                        </p>
                    </div>
                    
                </div>
                
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-1.png')}}" class="icon" alt="">
                        <h3 class="title">
                            <b>A.I Guideline</b>
                        </h3>
                        <p class="support">
                             A.I will track your progress and recommend what everything you need.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                <div class="item-benefit">
                        <img src="{{asset('images/ic_globe.png')}}" class="icon" alt="">
                        <h3 class="title">
                            <b>Live Online Classes</b>
                        </h3>
                        <p class="support">
                            Interactive group classes<br> with expert teachers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic_globe-3.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Future Job
                        </h3>
                        <p class="support">
                            Get your dream job in your dream company together<br> with us
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step1.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        LEARN BETTER
                    </p>
                    <h2 class="primary-header">
                    Live online classes
                    </h2>
                    <p class="support">
                    Live online classes with expert teachers<br> Boost your English skills and confidence. 
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Learn More
                        </a>
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting pl-150">
                    <p class="story">
                        STUDY HARDER
                    </p>
                    <h2 class="primary-header">
                        Finish The Project
                    </h2>
                    <p class="support">
                        Each of you will be joining the private group and also <br> working together with team members on project
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            View Demo
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step2.png')}}" class="cover" alt="">
                </div>

            </div>
            <div class="row item-step">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step3.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        END GAME
                    </p>
                    <h2 class="primary-header">
                        Big Demo Day
                    </h2>
                    <p class="support">
                        Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Showcase
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                        <div class="table-pricing">
                                <p class="story text-center">
                                    BASIC
                                </p>
                                <h1 class="price text-center">
                                    Rp500.000
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                    &nbsp;
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="http://localhost:8000/course" class="btn btn-master btn-secondary w-100 mt-3">
                                        Start With This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                        <div class="table-pricing">
                                <p class="story text-center">
                                    STANDART
                                </p>
                                <h1 class="price text-center">
                                    Rp750.000
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Unlock All Course
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="http://localhost:8000/course" class="btn btn-master btn-secondary w-100 mt-3">
                                        Start With This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                        <div class="table-pricing">
                                <p class="story text-center">
                                    PREMIUM
                                </p>
                                <h1 class="price text-center">
                                    Rp1.500.000
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        1-1 Mentoring Program
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Certificate
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="/assets/images/ic_check.svg" alt="">
                                    <p>
                                    Unlock All Course
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="http://localhost:8000/course" class="btn btn-master btn-secondary w-100 mt-3">
                                        Start With This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <h2 class="primary-header">
                    What are they saying about us?
                    </h2>
                    <p class="story">
                        OUR SUCCESS STUDENTS
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                            <div class="user">
                                    <img src="{{asset('images/person 1.png')}}">
                                    <div class="info">
                                        <h4 class="name">
                                            Beatrice
                                        </h4>
                                        <p class="role">
                                            Influencer
                                        </p>
                                    </div>
                                </div>
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                With the help of learning english's mentors, my English skills have definitely improved - especially my speaking and presentation skills
                                </p>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                            <div class="user">
                                    <img src="{{asset('images/person 2.png')}}" >
                                    <div class="info">
                                        <h4 class="name">
                                            Alvares
                                        </h4>
                                        <p class="role">
                                            Student
                                        </p>
                                    </div>
                                </div>
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                If you want to improve your English skills i recommend you try out Golden English. The teacher really helps me when i need to learn more
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                            <div class="user">
                                    <img src="{{asset('images/Person 3.png')}}" >
                                    <div class="info">
                                        <h4 class="name">
                                            Jonas
                                        </h4>
                                        <p class="role">
                                            Employee
                                        </p>
                                    </div>
                                </div>
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                Learning english is a place where you can practice English conversation through the interactive medias, such as videos
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- footer -->
 <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">LearningEnglish.com helps you understand the connections between theory and practice, and the importance of developing strong principles of practice in English language teaching and learning. You will develop an expert understanding of the core principles of language teaching and learning.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="#">Vocabulary</a></li>
              <li><a href="#">Grammar</a></li>
              <li><a href="#">Listening</a></li>
              
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">Program</a></li>
              <li><a href="#">Our Mentor</a></li>
              <li><a href="#">Pricing</a></li>
         
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by Learning English
            </p>
          </div>

          
        </div>
      </div>
</footer>

@endsection 


<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="{{asset('images/logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8000/">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="http://localhost:8000/mentor">Our Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8000/course">Courses</a>
                </li>
            </ul>
            @auth
            <div class="d-flex user-logged nav-item dropdown no-arrow">
                    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Halo, {{Auth::user()->name}}!
                        @if (Auth::user()->avatar)
                        <img src="{{Auth::user()->avatar}}" class="user-photo" alt="" style="border-radius: 50%">
                        @else
                        <img src="https://ui-avatars.com/api/?name=Admin" class="user-photo" alt="" style="border-radius: 50%">
                        @endif
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto">
                            <li>
                                <a href="{{route('dashboard')}}" class="dropdown-item">My Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                                <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </li>
                        </ul>
                    </a>
                </div>
            @else
                <div class="d-flex">

                    <a href="/login" class="btn btn-master btn-primary">
                        Login
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
