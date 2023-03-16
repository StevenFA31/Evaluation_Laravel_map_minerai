<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minerai extends Model
{
    use HasFactory;
    protected $table = 'minerai';
    public function zone()
    {
        return $this->hasMany(Minerai::class, 'minerai_id');
    }
}