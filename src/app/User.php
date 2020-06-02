<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Pagination\LengthAwarePaginator;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar', 'username', 'name', 'email', 'password',
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
     * Get all the followers of this user.
     *
     * @return BelongsToMany
     */
    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'follows', 'following_user_id', 'user_id');
    }

    /**
     * Determine if the user is following a user with a given userId.
     *
     * @param  int  $userId
     * @return bool
     */
    public function following(int $userId): bool
    {
        return $this->follows()->where('following_user_id', $userId)->exists();
    }

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
    public function getAvatarAttribute(?string $filepath): string
    {
        return asset('storage/' . ($filepath ?: 'images/avatars/default.jpg'));
    }

    /**
     * Get the cover image URL.
     *
     * @return string
     */
    public function getCoverImageAttribute(): string
    {
        return "https://source.unsplash.com/random/700x223";
    }

    /**
     * Hash the password.
     *
     * @param  string  $password
     * @return void
     */
    public function setPasswordAttribute(string $password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * Get the timeline of this user.
     *
     * @return LengthAwarePaginator
     */
    public function timeline(): LengthAwarePaginator
    {
        return Tweet::where('user_id', $this->id)
            ->orWhereHas('user', function ($query) {
                $query->whereHas('followers', function ($query) {
                    $query->where('user_id', $this->id);
                });
            })
            ->latest()
            ->paginate();
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
