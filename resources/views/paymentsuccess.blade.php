@extends('layouts.app')

@section('content')

<<div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <h2 class="primary-header">
                        Purchase Successfull!

                    </h2>
                    <h3 class="primary-header">

                        <img src="{{asset('images/sukses.png')}}">
                    </h3>
                    <p class="support">
                    Check other courses to help you achieve your goal!
                        </p>
                        <p>
                                    <a href="http://localhost:8000/dashboard" class="btn btn-master btn-secondary w-20 mt-3">
                                        My Courses
                                    </a>
                                </p>
                </div>
            </div>