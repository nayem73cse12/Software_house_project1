<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $table="infoTable";
    protected $primarykey="register_id";

    protected $fillable=[
         'name',
         'dept',
         'registration_no',
         'comment'
    ];
}
