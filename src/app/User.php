<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all the users followed by this user.
     *
     * @return BelongsToMany
     */
    public function follows(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    /**
     * Get the Avatar URL.
     *
     * @return string
     */
    public function getAvatarAttribute(): string
    {
        return "https://i.pravatar.cc/40?u={$this->id}";
    }

    /**
     * Get the timeline of this user.
     *
     * @return Collection
     */
    public function timeline(): Collection
    {
        return Tweet::where('user_id', $this->id)->latest()->get();
    }

    /**
     * Get all the tweets posted by this user.
     *
     * @return HasMany
     */
    public function tweets(): HasMany
    {
        return $this->hasMany(Tweet::class);
    }
}
