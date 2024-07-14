<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppFitur extends Model
{
    use HasFactory;
    protected $table = 'app_fiturs';
    protected $primaryKey = 'id_fitur';
    protected $fillable = ['nama_fitur', 'aktif'];
}
