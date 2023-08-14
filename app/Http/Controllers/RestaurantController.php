<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Order;
class RestaurantController extends Controller
{

    public function first(){

        $foodmenu=Food::all();
        return view('FoodRestaurant',['foodchoice'=>$foodmenu]);      
    }



    public function index() {
        
        $foodmenu=Food::all();
    return view('FoodRestaurant',['foodchoice'=>$foodmenu]);


    }

    public function show($id){
        $orderfood=Order::find($id);


        return view('details',['id'=>$orderfood]);
    }


    public function create(){
        return view('create');

    }

    public function fillup(){
        $foodorder= new Order();
        $foodorder->Foodtype=request('name');
        $foodorder->Size=request('size');
        $foodorder->Price=request('price');
        $foodorder->add_ons=request('addons');
        
        $foodorder->save();

        return redirect('/mainpage')->with('msg','Thank you for the order');
    }

    public function remove($id){

        $foodord=Order::findorFail($id);
        $foodord->delete();

        return redirect('/mainpage');

    }

   public function orderdetails(){
        $orders=Order::all();
        return view('orderdetails',['orderchoice'=>$orders]);
        
    }
}
