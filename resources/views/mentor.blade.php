@extends('layouts.app')

@section('content')

<div class="container-fluid" style="background-color: #fff;">  
	<div id="wrapper" class="container">
    	<div class="row">
            <div id="department" class="col-12 col-md-12 col-lg-12 col-xl-12">
				<h4 class="subtitle">Our Mentor </h4>
                <div class="row"><div id="staff" class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card thumb"><img src="{{asset('images/windahbasudara.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body"><h5 class="card-title">Windah Basudara</h5>
                    <p class="card-text subject">YouTuber, Bocil Kematian's Leader &amp; and Online Streamer. </p>
                    <p class="card-text email"><a href="mailto:windahbdara@gmail.com">windahbdara@gmail.com</a></p>
                </div>
            </div>
        </div>
        
        
        <div id="staff" class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card thumb"><img src="{{asset('images/theo.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body"><h5 class="card-title">Ir. Theodorus Stevanus Setiawan S.ML</h5>
            <p class="card-text subject">Social Media Influencer, ProPlayer of Mobile Legends, Midlaner, Goldlaner and Core.</p>
            <p class="card-text email"><a href="mailto:csgiisipeak123@gmail.com">csgiisipeak123@gmail.com</a></p></div>
        </div>
    </div>
    
    
        <div id="staff" class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3"><div class="card thumb">
            <img src="{{asset('images/andhika.jpg')}}"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Andhika Putratama S.Cbc</h5>
                <p class="card-text subject">IT Specialist, ProPlayer of Mobile Legends, Chou Only, EXPLaner and Roamer.</p>
                <p class="card-text email"><a href="mailto:andhikaganteng@gmail.com">andhikaganteng@gmail.com</a></p>
            </div>
        </div>
    </div>
    
    
    <div id="staff" class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3"><div class="card thumb">
        <img src="{{asset('images/ricky.jpg')}}" class="card-img-top" alt="..."><div class="card-body">
            <h5 class="card-title">Ricky Gunawan S.CL</h5>
            <p class="card-text subject">Social Media Strategist, Proplayer of Classic, Franco Nana user.</p>
            <p class="card-text email"><a href="mailto:rickygunawan@gmail.com">rickygunawan@gmail.com</a></p></div>
        </div>
    </div> 
        	</div>
		</div>
	</div>
</div>

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
              <li><a href="http://localhost:8000/">Program</a></li>
              <li><a href="http://localhost:8000/mentor">Our Mentor</a></li>
              <li><a href="http://localhost:8000/course">Courses</a></li>
         
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
                    <a class="nav-link" aria-current="page" href="http://localhost:8000/">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8000/mentor">Our Mentor</a>
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