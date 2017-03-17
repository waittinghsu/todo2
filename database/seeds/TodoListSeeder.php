<?php

use App\Repositories\TodoList;
use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TodoList::truncate();
        foreach (range(1,10) as $id){
            TodoList::create([
                'name' => "TodoList".$id,
                'done' => false,
                'description' => "可以使用 docker rm 來刪除一個處於終止狀態的容器。 例如",
                'status' => false
            ]);
        }
    }
}
