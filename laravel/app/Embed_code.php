<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Embed_code extends Model
{
  // Explicit table name, since DB table is not plural of Model name
  protected $table = 'embed_code';
}
