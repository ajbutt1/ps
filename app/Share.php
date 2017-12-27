<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
      public function shareData()
    {
        return $this->hasOne('App\ShareData');
    }
}
