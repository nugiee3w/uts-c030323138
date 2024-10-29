<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionExhibition extends Model
{
    use HasFactory;

    protected $table = 'collection_exhibition';

    protected $fillable = ['collection_id', 'exhibition_id'];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function exhibition()
    {
        return $this->belongsTo(Exhibition::class);
    }
}
