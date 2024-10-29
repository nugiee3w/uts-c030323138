<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageLocation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'floor'];

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}