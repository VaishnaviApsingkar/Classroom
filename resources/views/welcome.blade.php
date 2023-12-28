
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        padding: 1em;
    }

    .title {
        font-size: 84px;
    }


    .m-b-md {
        margin-bottom: 30px;
    }
    .text{
        font: 0.5em sans-serif;
        font-weight: 1000
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md pt-4">
            
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 col-lg-7 order-md-2">
            
            <!-- Image -->
            <img src="/images/illustration-2.png" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" alt="..." data-aos="fade-up" data-aos-delay="100">

          </div>
          <div class="col-12 col-md-6 col-lg-5 order-md-1 aos-init aos-animate" data-aos="fade-up">
            
            <!-- Heading -->
            <h1 class="display-3 text-center text-md-left">
              Welcome to <span class="text-primary">Classroom</span>. <br>
              Learn Online.
            </h1>

            <!-- Text -->
            <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">
              An easy way to submit and assign assigment
            </p>
                
            <!-- Buttons -->
            
            <div class="text-center text-md-left">
              <a href="/p" class="btn btn-primary shadow lift mr-1">
                Getting started
              </a>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    
        </div>
    </div>  
@endsection
