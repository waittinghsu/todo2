<?php

namespace App\Http\Controllers;

use App\Policies\TodoListPolicy;
use Illuminate\Http\Request;
use Repositories\TodoList;

class TasksController extends Controller
{
    public function index()
    {
        return view("todoList.todo");
    }

    public function create()
    {
        TodoList::create([
            'name' => "TodoList : ({$_POST['name']})",
            'done' => false,
            'description' => "所需要的命令主要為 docker run。",
            'status' => true
        ]);
        return redirect()->route('index.index');
    }

    public function update($id)
    {
        TodoList::where('id',$id)->update(["done"=>true]);
        return redirect()->route('index.index');
    }

    public function delete($id)
    {
        if (policy($id)->delete($id)) {
            dd('53453');
        }
        dd('saasd');
        \App\Repositories\TodoList::where('id',$id)->delete();
        return redirect()->route('index.index');
    }

    public function destroy($id)
    {
        $task = TodoList::where('id',$id)->get();

        $this->authorize('destroy', $task);
        dd($task[0]->name);
    }

}
