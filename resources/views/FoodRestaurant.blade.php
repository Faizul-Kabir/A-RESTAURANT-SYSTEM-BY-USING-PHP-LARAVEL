
    
    @extends('layouts.app')
    @section('content')

    
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    
    
    
    <img class="k1" src="/img/burger.jpg" height="100" width="700" >
    <img class="k2" src="/img/img1.png" height="50" width="500" >

    
    


    
   
                <div class="title">
                    <h1>Welcome</h1>
                    
            </div>
            <br>
            <p class= "p4"> MENU </p>
            
            <p style="font-size:30px;font-weight:bold;">{{session('msg')}}</p>
            
            <div class="b1">
                 <P style="color:black;"> BURGERS </p>
                  @foreach($foodchoice as $y) 
                  
                  @php  
                  if($loop->index==3)  {
                    break;
                  }
                  
                  @endphp
                  {{$y->Foodtype}}-{{$y->Size}}-{{$y->Price}} <br/>
                    
            
                  @endforeach     
                  

            </div>

            
            <div class="b2"> <br>
            <P style="color:black;"> PIZZAS </p>
                  <br>
                @foreach($foodchoice as $y) 
                  
                  @php  
                  if($loop->index==0)  {
                    continue;
                  }
                  if($loop->index==1)  {
                    continue;
                  }
                  if($loop->index==2)  {
                    continue;
                  }
                  if($loop->index==6)  {
                    break;
                  }
                  
                  @endphp
                  {{$y->Foodtype}}-{{$y->Size}}-{{$y->Price}} <br/>
                    
            
                  @endforeach


                </div>
                <div class="b3"> <br>
                <P style="color:black;"> cake </p>
                  <br>
                @foreach($foodchoice as $y) 
                  
                  @php  
                  if($loop->index==0)  {
                    continue;
                  }
                  if($loop->index==1)  {
                    continue;
                  }
                  if($loop->index==2)  {
                    continue;}

                    if($loop->index==3)  {
                    continue;
                  }
                  if($loop->index==4)  {
                    continue;
                  }
                  if($loop->index==5)  {
                    continue;

                  }
                  
                  
                  @endphp
                  {{$y->Foodtype}}-{{$y->Size}}-{{$y->Price}} <br/>
                    
            
                  @endforeach


                </div>
                
                      
            <div class= "place">
                  <a href="/mainpage/create" > Place Order </a>

            </div>
    @endsection
