<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      'user_id',
      'pakket',
      'sneller_internet',
      'wifi',
      'online_telefooncentrale',
      'office_365'
    ];
}
