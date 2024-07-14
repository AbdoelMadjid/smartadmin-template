<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppProfile extends Model
{
    use HasFactory;
    protected $table = 'app_profiles';
    protected $fillable = ['app_nama', 'app_deskripsi', 'app_tahun', 'app_pengembang', 'app_icon', 'app_logo'];
}
