@extends('layout')
@section('content')
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    body{
    background-color: #edf1f5;
    margin-top:20px;
}
.card {
    margin-bottom: 30px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
}
.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #8898aa;
}
.table-product.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f3f8fa!important
}
.table-product td{
    border-top: 0px solid #dee2e6 !important;
    color: #728299!important;
}

.card-title, .card-subtitle{
    position: relative;
    left: 80px;
}
</style>
<div class="row">
    @foreach($games as $game)
  
<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{$game->name}}</h3>
            <h6 class="card-subtitle">{{$game->developer}}</h6>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img src="{{asset('images/')}}/{{$game->image}}" class="img-fluid"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    
                    <h4 class="box-title mt-5">Game description</h4>
                    <p>{{$game->description}}</p>
                    <h2 class="mt-5">
                    RM {{$game->price}}<small class="text-success"></small>
                    </h2>
                    
                <h3 class="box-title mt-5">Release Date</h3>
                    <ul class="list-unstyled">
                        <li><i></i>{{$game->release_date}}</li>

                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="box-title mt-5">More Information</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-product">
                            <tbody>
                                <tr>
                                    <td width="390">Platform:</td>
                                    <td>{{$game->platform}}</td>
                                </tr>
                                <tr>
                                    <td>Publisher:</td>
                                    <td>{{$game->publisher}}</td>
                                </tr>

                                 
                           
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

    @endforeach

</div>

@endsection