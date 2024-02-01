<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_year extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date'
    ];
    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
