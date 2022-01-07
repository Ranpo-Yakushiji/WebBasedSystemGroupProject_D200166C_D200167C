@extends('layout')
@section('content')
<style>
    #carousel img{
        max-height: 700px;
    }

    .more{
        padding:12px 20px;
        border-left: 4px solid #87cefa;
        border-right: none;
        border-top: none;
        border-bottom: none;
        background-color: transparent;
        margin-top: 20px;
    }

    .more:hover{
        background: #87cefa;
        transition: background-color 1000ms linear;
    }

    .intro{  
        margin: 50px auto;
    }

    .game{
        padding: 35px;
        margin-left: auto;
        margin-right: auto;
    }

    .text-intro{
        padding: 20px;
    }

    .title-intro{
        padding-bottom: 15px;
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
        <p>First text</p>
      </div>
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/DreamChaser.png')}}"
        alt="Second slide">
        <div class="carousel-caption">
        <h3 class="h3-responsive">Upcoming Game</h3>
        <p>First text</p>
      </div>
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/paperdoll3.jpg')}}"
        alt="Third slide">
        <div class="carousel-caption">
        <h3 class="h3-responsive">Upcoming Game</h3>
        <p>First text</p>
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
    <div class="intro mx-auto container-fluid">
        <div class="row game">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="{{asset('images/DreamChaser.png')}}" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 class="title-intro">Game Introduction</h2>
                <p class="text-intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                <button class="more">Learn More</button>
            </div>
        </div>
    </div>
@endsection