@extends('layout')
@section('content')
<style>

    .category-title{
        text-align: center;
        padding: 25px;
    }

    .add{
        text-align: center;
    }

    .add button{
        padding: 10px 30px;
        margin: 20px;
    }

    input[type=text], input[type=number], input[type=date], input[type=file]{
        width: 70%;
        margin-left:auto;
        margin-right:auto;
        margin-bottom: 8px;
    }

    .textarea{
        width: 70%;
        margin-left:auto;
        margin-right:auto;
    }

    .form{
        
        box-shadow: 0 6px 10px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }

    .form{
        margin-top: 80px;
        margin-bottom: 80px;
        background-color: white;
        border-radius: 8px;
        padding: 13px;
        
    }

    .game{
        
        background-image: url('{{ asset('images/wallpaper.jpeg') }}');
        background-size: cover;
    }
</style>

<div class="container-fluid game">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto form">
            <h2 class="category-title">Create New Game</h2>
            <form action="{{route('addGame')}}" method="POST" enctype="multipart/form-data">
                @CSRF
                <div class="form-group">
                    <input type="text" class="form-control" id="gameName" name="gameName" placeholder="New Game Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="gameDeveloper" name="gameDeveloper" placeholder="New Developer Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="gamePublisher" name="gamePublisher" placeholder="New Publisher Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="gamePlatform" name="gamePlatform" placeholder="New Platform">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="gamePrice" name="gamePrice" placeholder="New Game Price" min="0">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" id="release_date" name="release_date" placeholder="New Game Release Date">
                </div>
                <div class="form-group">
                    <textarea class="form-control textarea" id="gameDescription" name="gameDescription" placeholder="New Game Description" rows="6"></textarea>
                </div>
                <div class="form-group">
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
                    <input type="text" class="form-control" id="DeveloperID" name="DeveloperID" placeholder="New DeveloperID">
                </div>
                <div class="add">
                    <button type="submit" class="btn btn-primary">Add  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
                        <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z"/>
                        <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z"/>
                        </svg></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection