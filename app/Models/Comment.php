<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
    ];

    /**
     * Get the post this comment belongs.
     */
    public function post() {
        return $this->belongsTo(Post::class);
    }

    /**
     * Get the user this comment belongs.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

}
