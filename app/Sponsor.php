<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
  public function organizations()
  {
    return $this->hasMany(Organization::class);
  }

  public function users()
  {
    return $this->hasMany(User::class);
  }
}
