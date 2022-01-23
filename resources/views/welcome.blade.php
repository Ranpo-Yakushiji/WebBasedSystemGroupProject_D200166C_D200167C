@extends('layout')
@section('content')
<style>
    #carousel img{
        max-height: 700px;
    }

    .game button{
        padding:12px 20px;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .intro{  
        margin: 50px auto;
    }

    .game{
        padding: 35px;
        margin-left: auto;
        margin-right: auto;
        text-align:center;
    }

    .title-intro{
        padding-bottom: 15px;
    }

    .game img{
      max-width:600px;
      max-height:600px;
    }

</style>

<!--Carousel Wrapper-->
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/paperdoll3.jpg')}}"
        alt="First slide">
        <div class="carousel-caption">
        <h3 class="h3-responsive">Upcoming Game</h3>
        <p style="opacity: 0.7;">Paper Bridge 3 Internation Server</p>
      </div>
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/stray.jpeg')}}"
        alt="Second slide">
        <div class="carousel-caption">
        <h3 class="h3-responsive">Upcoming Game</h3>
        <p style="opacity: 0.7;">Stray</p>
      </div>
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/cat-cafe-manager.jpeg')}}"
        alt="Third slide">
        <div class="carousel-caption">
        <h3 class="h3-responsive">Upcoming Game</h3>
        <p style="opacity: 0.7;">Cat Cafe Manager</p>
      </div>
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<br>
    <div class="container-fluid">
        <div class="row game">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{asset('images/gameicon1.png')}}" class="img-fluid">
                <h2 class="title-intro">Game Recommendation</h2>
                <a href="{{ route('games')}}"><button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark">Know more</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <img src="{{asset('images/developericon1.png')}}" class="img-fluid">
                <h2 class="title-intro">Developer Introduction</h2>
                <a href="{{route('developers')}}"><button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark">Know more</button></a>
            </div>
        </div>
    </div>
@endsection