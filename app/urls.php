<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urls extends Model
{
    protected $table = 'urls';
    public $primaryKey = 'id';
    public $timestamps = true;
}
