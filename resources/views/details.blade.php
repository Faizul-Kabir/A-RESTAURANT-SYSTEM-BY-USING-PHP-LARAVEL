@extends('layouts.app')

    @section('content')
    <div class="wrapper">
        <h1 class="u1"> Details of Order for {{$id->Foodtype}} </h1>
        
        <p class="size">Size-{{$id->Size}}</p>
        <p class="price">Price-{{$id->Price}}</p>
        <p> ADD-ONS: </p>
        <ul>
            @foreach($id->add_ons as $addons)
            <li> Selected->{{$addons}} </li>    
            @endforeach
        </ul>

     <form action="/mainpage/{{$id->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="b2"> CANCEL ORDER </button>
    </form>   
    </div>
    <a href="/mainpage" style="font-size:20px;margin-left:700px;"> Back to Main page </a>        
    @endsection
