<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
	protected $table="questionTable";
    protected $primarykey="question_id";

    protected $fillable=[
      'question_id',
      'question',
      'option_1',
      'option_2',
      'option_3',
      'option_4'

    ];
}
