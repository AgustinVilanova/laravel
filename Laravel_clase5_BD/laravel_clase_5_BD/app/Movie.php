<?php

namespace App;
use App\Director;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded=[];

    public function director(){

      return $this->belongsTo(Director::class);
    }
}
