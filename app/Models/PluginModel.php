<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PluginModel extends Model
{
    use HasFactory;

    protected $table = "plugins";
    
    protected $fillable = ['plugin', 'status'];
}
