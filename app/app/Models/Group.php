<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'Group_number',
        'Reference',
        'school_years_id'
    ];

    public function schoolYear()
    {
        return $this->belongsTo(School_year::class, 'school_years_id');
    }
}