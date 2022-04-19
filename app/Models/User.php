<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
    public function like($post)
    {
        if($this->hasLike($post)) {
            return $this->bookmarks()->where([
                ['likes.post_id', $post->id]
            ])->delete();
        }
    
        return $this->likes()->create(['post_id' => $post->id, 'user_id'=> $this->id]);
    }

    public function hasLike($object)
    {
        return $this->likes()->where([
            ['likes.post_id', $object->id]
        ])->exists();
    }
}
