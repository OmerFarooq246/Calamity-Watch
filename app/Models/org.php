<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class org extends Model
{
    use HasFactory;
    protected $table = 'international';
    public $incrementing = 'false';
    public $timestamps = 'false';
}
