@extends('layouts.app')

    @section('content')
    <div>
        <h1 style="background:yellow;padding:20px;"> Place Your Order Here </h>
        <br><br>
        <form action="/mainpage" method="POST">
            @csrf
            <select name="name" id="name" style="padding:5px; border:10px black solid">
                <option value="Burger">Burger </option>
                <option value="Pizza">Pizza </option>
                <option value="Cake">Cake </option>

            </select>

            
          <label for="size" > Size: </label>
            <input type="text" id="size" name="size" style="padding:5px; border:10px black solid">
            <label for="price"> Price: </label>
            <input type="text" id="price" name="price" style="padding:5px; border:10px black solid">
            <br/>
            <div class="f1">
                <label> ADD-ONS: </label><br/>
                <input type="checkbox" name="addons[]" value="CHEESE">CHEESE<br/>
                <input type="checkbox" name="addons[]" value="EXTRA-SAUCE">EXTRA-SAUCE<br/>
                <input type="checkbox" name="addons[]" value="TOMATO">TOMATO<br/>




</div>
            

        <input type="submit" value="Place Order" style="margin-left:700px; padding:70px; border:20px black solid">
        </form>

    </div>
            
    @endsection