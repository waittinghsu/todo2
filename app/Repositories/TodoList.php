<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $table = 'todo_list';
    protected $primaryKey = 'id';

    protected $fillable = ['name','done','description','status',];

    public function order()
    {
        return $this->hasMany(Order::class,'todo_list_id','id');
    }
}
