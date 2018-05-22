<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['icon_id', 'title', 'description'];

    public function organization()
    {
      return $this->belongsTo(Organization::class);
    }

    public function icon()
    {
      return $this->belongsTo(Icon::class);
    }
}
