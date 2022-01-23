@extends('layout')
@section('content')
<style>
    .developer-table{
        margin-top:80px;
        margin-bottom:80px;
    }

    .developer-title{
        text-align: center;
        padding-bottom: 30px;
    }

    .game-table{
        overflow-x: hidden;
    }
    </style>

<div class="developer-table">


    <h2 class="developer-title">Developer List</h2>
<div class = "row">
   
    <div class ="col-sm-3"></div>
    <div class ="col-sm-d">
        <br><br>
        <table class = "table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Developer Name</td>
                    <td>Founder</td>
                    <td>Headquartes</td>
                    <td>Most Popular Game</td>
                    <td>Icon</td>
                    <td>Action</td>
                    

                </tr>
            </thead>
            <tbody>
                @foreach($developers as $developer)
            <tr>
                    <td>{{$developer->id}}</td>
                    <td>{{$developer->name}}</td>
                    <td>{{$developer->founder}}</td>
                    <td>{{$developer->headquarters}}</td>
                    <td>{{$developer->game}}</td>

                    <td>
                    <img src = "{{asset('images/')}}/{{$developer->image}}" width = "100" class = "img-fluid ">
                    </td>

                    <td><a href="{{ route('editDeveloper',['id'=>$developer->id])}}" class="btn btn-warning btn-xs">Edit</a> <a href="{{ route('deleteDeveloper',['id'=>$developer->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>

                </tr>

                @endforeach

            </tbody>
        </table>
      
        <br><br>
    </div>
  

</div>
</div>
@endsection