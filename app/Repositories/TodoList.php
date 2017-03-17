<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $table = 'todolist';

    protected $fillable = [
        'name',
        'done',
        'description',
        'status',
    ];
}
