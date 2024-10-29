<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'contact_info', 'country'];

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
