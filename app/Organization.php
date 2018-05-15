<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{


  /**
  * Get the route key for the model.
  *
  * @return string
  */
  public function getRouteKeyName()
  {
    return 'name';
  }

  public function services()
  {
    return $this->hasMany(Service::class);
  }
}
