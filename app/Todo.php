<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Todo extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    'content' => 'required'
  );

  public function user() {
    return $this->belongsTo('App\User');
  }
}
