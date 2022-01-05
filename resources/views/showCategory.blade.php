@extends('layout')
@section('content')
<style>
    .category-table{
        margin-top:80px;
        margin-bottom:80px;
    }

    .gamecategory-title{
        text-align: center;
        padding-bottom: 30px;
    }

    div{
        overflow-x: hidden;
    }

</style>

<div class="category-table">
    <h2 class="gamecategory-title">Game Category</h2>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td><a href="{{ route('editCategory',['id'=>$category->id])}}" class="btn btn-warning btn-xs">Edit</a> <a href="{{ route('deleteCategory',['id'=>$category->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you confirm to delete?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection