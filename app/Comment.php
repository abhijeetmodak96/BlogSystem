<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //Table name
    protected $table= 'comments';
    //primary key
    public $primaryKey = 'id';
    //
    public $timestamps = true; 

    
}
