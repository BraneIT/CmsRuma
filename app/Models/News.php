<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'category',
        'content',
        'image',
        'visitors',
    ];
    public function getCreatedAtAttribute($value)
        {
            return Carbon::parse($value)->format('d.m.Y');
        }
    public function scopeByCategory($query, $category)
        {
            return $query->where('category', $category);
        }
    public function category()
        {
            return $this->belongsTo('App\Models\Categories', 'category_id');
        }
}

