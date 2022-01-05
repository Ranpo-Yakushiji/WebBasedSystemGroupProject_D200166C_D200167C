@extends('layout')
@section('content')
<style>

</style>

<div class="container-fluid category">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto form">
            <h2 class="category-title">Edit Game Details</h2>
            <form action="{{route('updateGame')}}" method="POST" enctype="multipart/form-data">
                @CSRF
                @foreach($games as $game)
                <div class="form-group">
                    <input type="text" class="form-control" id="gameName" name="gameName" value="{{$game->name}}">
                    <input type="hidden" name="gameID" id="gameID" value="{{$game->id}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="gameDeveloper" name="gameDeveloper" value="{{$game->developer}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="gamePublisher" name="gamePublisher" value="{{$game->publisher}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="gamePlatform" name="gamePlatform" value="{{$game->platform}}">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="gamePrice" name="gamePrice"  min="0" value="{{$game->price}}">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" id="release_date" name="release_date" value="{{$game->release_date}}">
                </div>
                <div class="form-group">
                    <textarea class="form-control textarea" id="gameDescription" name="gameDescription"  rows="6">{{$game->description}}</textarea>
                </div>
                <div class="form-group">
                    <img src="{{asset('images')}}/{{$game->image}}" alt="" class="img-fluid" width="100">
                    <input type="file" class="form-control" id="gameImage" name="gameImage">
                </div>
                <div class="form-group">
                    <select name="CategoryID" id="CategoryID" class="form-control" style="max-width: 70%; margin: 4px auto">
                        @foreach($CategoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="DeveloperID" name="DeveloperID" value="{{$game->DeveloperID}}">
                </div>
                @endforeach
                <div class="add">
                    <button type="submit" class="btn btn-primary">Edit  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
                        <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z"/>
                        <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z"/>
                        </svg></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection