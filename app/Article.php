<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

  protected $fillable = ['title','content','slug','user_id'];

  protected $table = 'articles';

  public static $create_validation_rules = [
    'title'=>'required',
    'content'=>'required',
    'slug'=>'required|unique:articles'
  ];

  public static $update_validation_rules = [
    'title'=>'required',
    'content'=>'required',
    'slug'=>'required'
  ];


  public function user()
  {
    $this->belongsTo('App\User');
  }
}
