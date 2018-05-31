<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{

  protected $guarded = ['id'];
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

  public function posts()
  {
    return $this->hasMany(Post::class);
  }

  public function addService($request)
  {
    $this->services()->create([
      'icon_id' => request('icon_id'),
      'title' => request('title'),
      'description' => request('description')
    ]);

  }
}
