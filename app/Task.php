<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * eloquent for the local scope
     * it often returns a builder
     * not completed
     * @param $query
     * @return mixed
     */
    public function scopeNotCompleted($query)
    {
        return $query->where('completed' , 0);
    }
}
