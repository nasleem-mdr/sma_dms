<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
