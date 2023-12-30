<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // isi fillable dengan filed db yang akan diisi lewat form html
    public $fillable = [
        'judul',
        'content'
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function total_comments() {
        return $this->comments()->count();
    }

    public function scopeActive($query) {
        return $query->where('active', 1);
    }
}
