<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Model as Eloquent;

class Book extends Eloquent {

    protected $collection 	= 'books_collection';
    protected $fillable 	= ['name','author'];
}