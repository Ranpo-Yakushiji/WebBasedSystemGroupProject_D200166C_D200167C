@extends('layout')
@section('content')
<script>
    function img(){
        var number = Math.floor(Math.random() * 8);
        if(number == 0){
            document.getElementById("myImageId").src="{{asset('images/daqiao.jpg')}}";
            document.getElementById('name').innerHTML = "Da Qiao"
        }else if(number == 1){
            document.getElementById("myImageId").src="{{asset('images/shunshangxiang.jpg')}}";
            document.getElementById('name').innerHTML = "Sun Shang Xiang"
        }else if(number == 2){
            document.getElementById("myImageId").src="{{asset('images/bailishouyue.jpg')}}";
            document.getElementById('name').innerHTML = "Bai Li Shou Yue"
        }else if(number == 3){
            document.getElementById("myImageId").src="{{asset('images/luna.jpg')}}";
            document.getElementById('name').innerHTML = "Luna"
        }else if(number == 4){
            document.getElementById("myImageId").src="{{asset('images/jialuo.jpg')}}";
            document.getElementById('name').innerHTML = "Jia Luo"
        }else if(number == 5){
            document.getElementById("myImageId").src="{{asset('images/zhuangzhou1.jpg')}}";
            document.getElementById('name').innerHTML = "Zhuang Zhou"
        }else if(number == 6){
            document.getElementById("myImageId").src="{{asset('images/athena.jpg')}}";
            document.getElementById('name').innerHTML = "Athena"
        }else if(number == 7){
            document.getElementById("myImageId").src="{{asset('images/charlotte.jpg')}}";
            document.getElementById('name').innerHTML = "Charlotte"
        }

    }
</script>


<div class="container-fluid character" style="background-color: lightblue">
    <div class= "row">
        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto" style="text-align:center; margin-top:50px; margin-bottom:50px" >
            <h1>Test Your Fate Hero in Honor of Kings</h1>          
            <img src="{{asset('images/wangzhe.jpg')}}" class="img-fluid" alt="image" id="myImageId"> 
            <h2 id = "name"></h2>
            <button type="button" class="btn btn-dark btnimg" style="margin-top:20px" data-mdb-ripple-color="dark" onclick="img()">Generate</button>
        </div>
    </div>

</div>
@endsection