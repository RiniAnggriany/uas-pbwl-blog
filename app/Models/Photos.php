<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = "tb_photos"; 

     protected $primaryKey = 'photos_id'; 

     protected $fillable = ['photos_date', 'photos_title', 'photos_text', 'post_id']; 
}
