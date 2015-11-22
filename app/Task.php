<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The table where all tasks are stored
     * and assigned to various workers.
     *
     * @var string
     */
    protected $table = 'tasks';
}
