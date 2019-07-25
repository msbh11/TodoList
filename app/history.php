<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    //
    protected $fillable = [
        'task_name', 'completion_date', 'completion_status'
    ];


    /*public function task(){

    	return $this->belongsTo(User::class);
    }*/

    public function scopeActive($query){
        return $query->where('completion_status', 1);
    }
}
