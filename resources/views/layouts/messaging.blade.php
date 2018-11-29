<!--main content start-->
@extends('layouts.app')
@section('title', 'EasyTax')
@section('content')
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{URL('/')}}">Home</a></li>
             
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="recent">
              <h3>Send us a message</h3>
            </div>
            
            <form action="" method="post" role="form" class="contactForm">
            @csrf
            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                        <div class="row form-group">
                        <div class="col-md-3"><label>Company Name:</label>
                        </div>
                        <div class="col-md-6">

                        {{ Auth::user()->company_name }}
                                 </div>
                                 </div>
                                
                           
                                <div class="row form-group">
                                <div class="col-md-3"><label>Email:</label>
                                </div>
                                <div class="col-md-6">
                                {{ Auth::user()->email }}
                                 </div>
                                 </div>
                                
                                
                                @endguest
            
              
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><input type="submit" class="btn btn-dark"name="submit" value="submit">
              <a href="{{URL('/layouts/details/{id}') }}" class="btn btn-dark">Back</a>
              </div>

            </form>
          </div>

          <div class="col-lg-6">
            <div class="recent">
              <h3>Get in touch with us</h3>
            </div>
            <div class="">
              <p>The Federal Government  has extended the due date for filing Income Tax Returns & Audit Reports from 15th November 2018 to 31st November 2018. However, there shall be no extension of the due date for purpose of Explanation 1 to Section 234A (Interest for defaults in furnishing return) of the Act and the assessee shall remain liable for payment of interest as per provisions of section 234A of the Act.</p>
              <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum.</p>

              <h4>Address:</h4>Little Lonsdale St, New York<br>
              <h4>Telephone:</h4>345 578 59 45 416</br>
              <h4>Fax:</h4>123 456 789
            </div>
          </div>
        </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    
    @endsection
    