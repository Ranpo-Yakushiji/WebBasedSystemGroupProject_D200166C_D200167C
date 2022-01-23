@extends('layout')
@section('content')
<link href='http://fonts.googleapis.com/css?family=Bitter'>
<style>
    .developer-title{
        text-align: center;
        padding: 25px;
    }

    .form-style-10{
        width:450px;
	    padding:30px;
	    margin:40px auto;
	    background: #FFF;
	    border-radius: 10px;
	    -webkit-border-radius:10px;
	    -moz-border-radius: 10px;
	    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	
    }

    .form-style-10 .inner-wrap{
	    padding: 30px;
	    background: #F8F8F8;
	    border-radius: 6px;
	    margin-bottom: 15px;
    }

    .form-style-10 h1{
	    background: #2A88AD;
	    padding: 20px 30px 15px 30px;
	    margin: -30px -30px 30px -30px;
	    border-radius: 10px 10px 0 0;
	    -webkit-border-radius: 10px 10px 0 0;
	    -moz-border-radius: 10px 10px 0 0;
	    color: #fff;
	    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	    font: normal 30px 'Bitter', serif;
	    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	    border: 1px solid #257C9E;
    }

    .form-style-10 h1 > span{
	    display: block;
	    margin-top: 2px;
	    font: 13px Arial, Helvetica, sans-serif;
    }

    .form-style-10 label{
	    display: block;
	    font: 13px Arial, Helvetica, sans-serif;
	    color: #888;
	    margin-bottom: 15px;
    }

    .form-style-10 .section{
	    font: normal 20px 'Bitter', serif;
	    color: #2A88AD;
	    margin-bottom: 5px;
    }


    .form-style-10 .section span {
	    background: #2A88AD;
	    padding: 5px 10px 5px 10px;
	    position: absolute;
	    border-radius: 50%;
	    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border: 4px solid #fff;
	    font-size: 14px;
	    margin-left: -45px;
	    color: #fff;
	    margin-top: -3px;
    }




    </style>

 


<div class="form-style-10">

<h1 class= developer-title>Create New Developer</h1>

<form action = "{{route('addDeveloper')}}" method = "POST" enctype="multipart/form-data">
    @CSRF

    <div class="section"><span>1</span>Company Name</div>
    <div class="inner-wrap">
        <label for = "developerName">Create new name <input type = "text" class="form-control" id="developerName" name ="developerName">
    
    </label>
        <label for = "developerHeadquartes">Address/Headquarters <textarea  type = "text" class="form-control" id="developerHeadquartes" name ="developerHeadquartes">
            
        </textarea></label>
    </div>



    <div class="section"><span>2</span>More Information</div>
    <div class="inner-wrap">
        <label for = "developerFounder">Founder<input type = "text" class="form-control" id="developerFounder" name ="developerFounder"></label>

        <label for = "developerGame">Most Popular Game <input type = "text" class="form-control" id="developerGame" name ="developerGame"></label>
    </div>

    <div class="section"><span>3</span>Company Icon</div>
        <div class="inner-wrap">
        <label for="developerImage">Upload Image <input type="file" class="form-control" id="developerImage" name="developerImage"></label>
    </div>


    <button type = "submit" class = "btn btn-primary">Add New</button>



</form>

</div>


@endsection