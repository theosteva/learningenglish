@extends('layouts.app')

@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        Courses
                    </p>
                    <h2 class="primary-header ">
                        My Courses
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                @include('components.alert')
                <table class="table">
                    <tbody>
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{asset('images/item.bootcamp.jpg')}}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{$checkout->Camp->title}}</strong>
                                    </p>
                                    <p>
                                        {{$checkout->created_at->format('M d, Y')}}
                                    </p>
                                </td>
                                <td>
                                    <strong>${{$checkout->Camp->price}}k</strong>
                                </td>
                                <td>
                                    <strong>{{$checkout->payment_status}}</strong>
                                </td>
                                <td>
                                    @if ($checkout->payment_status == 'waiting')
                                        <a href="{{$checkout->midtrans_url}}" class="btn btn-primary">Pay Here</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="https://wa.me/08xxxxxxxx?text=Hi, saya ingin bertanya tentang kelas {{$checkout->Camp->title}}" class="btn btn-primary">
                                        Contact Support
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h3>No Camp Registered</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
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
                    <a class="nav-link" href="#">Pricing</a>
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
