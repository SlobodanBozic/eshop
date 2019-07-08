<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  // Table name
  protected $table = 'products';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timeStamps = true;

  public function user(){
    return $this->belongsTo('App\User');
  }
}
