@extends('layout')
@section('content')
<style>
    .game-table{
        margin-top:80px;
        margin-bottom:80px;
    }

    .game-title{
        text-align: center;
        padding-bottom: 30px;
    }

    .game-table{
        overflow-x: hidden;
    }

</style>
<div class="game-table">
    <h2 class="game-title">Game Details</h2>
    <div class="row">
        <div class="col-lg-11 col-md-10 col-sm-12 mx-auto">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Developer</td>
                        <td>Publisher</td>
                        <td>Platform</td>
                        <td>Price</td>
                        <td>Release_Date</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>CategoryID</td>
                        <td>DeveloperID</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($games as $game)
                    <tr>
                        <td>{{$game->id}}</td>
                        <td>{{$game->name}}</td>
                        <td>{{$game->developer}}</td>
                        <td>{{$game->publisher}}</td>
                        <td>{{$game->platform}}</td>
                        <td>{{$game->price}}</td>
                        <td>{{$game->release_date}}</td>
                        <td>{{$game->description}}</td>
                        <td><img src="{{asset('images/')}}/{{$game->image}}" width="100" class="img-fluid"></td>
                        <td>{{$game->categoryName}}</td>
                        <td>{{$game->DeveloperID}}</td>
                        <td><a href="{{ route('editGame',['id'=>$game->id])}}" class="btn btn-warning btn-xs">Edit</a> <a href="{{ route('deleteGame',['id'=>$game->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you confirm to delete?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection