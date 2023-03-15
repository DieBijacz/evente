<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
  use HasFactory;

  public function scopeFilter($query, array $filters)
  {
    if ($filters['tag'] ?? false) {
      $query->where('tags', 'like', '%' . request('tag') . '%');
    }
    if ($filters['when'] ?? false) {
      $query->where('date', 'like', '%' . request('when') . '%');
    }
    if ($filters['search'] ?? false) {
      $query->where('title', 'like', '%' . request('tag') . '%');
    }
  }
}
