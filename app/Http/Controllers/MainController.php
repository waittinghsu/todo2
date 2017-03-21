<?php

namespace App\Http\Controllers;

use App\repositories\Order;
use App\Repositories\TodoList;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $TodoLists = TodoList::orderBy('id','desc')->get();

        $data = compact('TodoLists');

        $test = Order::orderBy('order_uid','asc')->get();
        dump($TodoLists);
        foreach ($test  as $value){
//            dump($value->todoList);
//            dump($value->product);
;        }
        return view("todoList.todo",$data);
    }


}
