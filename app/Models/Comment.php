<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = [
        'post_id', 'admin_id', 'comments', 'parent_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');    
    }

    public function commentable()
    {
        return $this->belongsTo();
    }
}
