<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'image', 'description'];

    // Relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
