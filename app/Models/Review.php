<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'user_id',
        'reviews',
        'stars',
        'business_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ubusiness(){
        return $this->belongsTo(Business::class);
    }
}
