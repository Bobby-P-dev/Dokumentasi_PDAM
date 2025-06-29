<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporans extends Model
{

    protected $fillable = [
        'user_id',
        'nama_kerusakan',
        'description',
        'alamat',
        'status',
        'image_path'
    ];

    protected $attributes = [
        'status' => 'pending',
    ];
    protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeSelesai($query)
    {
        return $query->where('status', 'selesai');
    }
}
