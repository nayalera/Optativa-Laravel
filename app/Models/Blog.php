<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'title_en', 'category_id', 'author', 'photo', 'slug', 'slug_en', 'text', 'text_en', 'status'
    ];

    public function category() {
        return $this->belongsTo(BlogCategories::class);
    }

    public function getUrlPhotoAttribute() {
        return Storage::url($this->photo);
    }
}
