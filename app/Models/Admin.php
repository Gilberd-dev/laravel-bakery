<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $guard = 'admins';
        // protected $guarded = [];
        protected $fillable = [
            'nama_admin','nomor_telepeon_admin','foto_admin','username', 'password',
        ];
        // protected $fillable = [
        
        //     'nama_admin' ,
        // 'nomor_telepon_admin',
        // 'foto_admin'
        // 'gambar_video_masukan'
        // 'updated_at',
        // 'created_at'
        // ];
}
