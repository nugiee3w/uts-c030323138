<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'acquisition_date', 
        'category_id', 
        'storage_location_id', 
        'collector_id', 
        'condition', 
        'estimated_value'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function storageLocation()
    {
        return $this->belongsTo(StorageLocation::class);
    }

    public function collector()
    {
        return $this->belongsTo(Collector::class);
    }

    public function exhibitions()
    {
        return $this->belongsToMany(Exhibition::class, 'collection_exhibition');
    }
}
