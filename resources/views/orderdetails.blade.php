@extends('layouts.app')

    @section('content')
    <div class="f2">
      @foreach($orderchoice as $orders)

      <div>
       {{$loop->index+1}}.Order is &nbsp----=>&nbsp&nbsp&nbsp&nbsp {{$orders->Foodtype}}-{{$orders->Size}}-{{$orders->Price}};

        </div>
      
    @endforeach  


    

</div>
<a href="/mainpage" style="font-size:20px;margin-left:700px;"> Back to Main page </a> 
    @endsection