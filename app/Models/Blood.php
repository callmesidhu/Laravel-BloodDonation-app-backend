<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    use HasFactory;
    protected $table = 'blood_data'; // Specify your table name
    protected $fillable = ['name', 'phone', 'blood']; // Add your columns
}
