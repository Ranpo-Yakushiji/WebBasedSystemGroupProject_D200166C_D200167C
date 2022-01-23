@extends('layout')
@section('content')
<style>
    body {
    background: linear-gradient(to top, #808080 0%, #ADD8E6 100%);
    font-family: 'proxima-nova-soft', sans-serif;
    font-size: 14px;

}

.developer-module {
    position: relative;
    z-index: 1;
    display: block;
    background: #FFFFFF;
    min-width: 270px;
    height: 470px;

}

.developer-module .thumbnail {
    background: #000000;
    height: 400px;
    overflow: hidden;
}


.developer-module .developer-content {
    position: absolute;
    bottom: 0;
    background: #FFFFFF;
    width: 100%;
    padding: 30px;
    -webkti-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

}

.developer-module .developer-content .category {
    position: absolute;
    top: -34px;
    left: 0;
    background: #056e03;
    padding: 10px 15px;
    color: #FFFFFF;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
}

.developer-module .developer-content .title {
    margin: 0;
    padding: 0 0 10px;
    color: #333333;
    font-size: 26px;
    font-weight: 700;
}

.developer-module .developer-content .sub_title {
    margin: 0;
    padding: 0 0 20px;
    color: #e74c3c;
    font-size: 20px;
    font-weight: 400;
}

.developer-module .developer-content .description {
    display: none;
    color: #666666;
    font-size: 14px;
    line-height: 1.8em;
}

.developer-module .developer-content .dev-meta {
    margin: 30px 0 0;
    color: #999999;
}

.hover .developer-content .description {
    display: block !important;
    height: auto !important;
    opacity: 1 !important;
}

.container {
    max-width: 800px;
    min-width: 640px;
    margin: 0 auto;
}

.container:before,
.container:after {
    content: '';
    display: block;
    clear: both;
}

.container .column {

    width: 50%;
    margin-top: 20px;
    padding: 0 25px;
    -webkti-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
}

.container .column .dev-title {
    margin: 0 0 15px;
    color: #FBFBF9;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
}
    </style>

<!--start -->

<div class="container">

@foreach($developers as $developer)
<div class="column">

<div class="dev-title">Developers </div>

<div class="developer-module hover">
            <!-- Thumbnail-->
            <div class="thumbnail">
                <img src="{{asset('images/')}}/{{$developer->image}}" width="100%" height="90%"/>
            </div>

              <!-- Dev Content-->
              <div class="developer-content">
                
                <h1 class="title">{{$developer->name}}</h1>
                <h2 class="sub_title">{{$developer->founder}}</h2>
                <p class="description">{{$developer->headquarters}}</p>
                <div class="dev-meta"><span class="dev"><i class="fas fa-gamepad"></i> {{$developer->game}}</span>
                   </div>
            </div>
        </div>
    </div>


    @endforeach




</div>
    <br><br>
</div>


<!--end-->


</div>

@endsection
