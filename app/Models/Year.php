<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
