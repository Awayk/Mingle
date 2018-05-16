<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{

  protected $guarded = [];
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

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function sponsors()
  {
    return $this->hasMany(Sponsor::class);
  }
}
