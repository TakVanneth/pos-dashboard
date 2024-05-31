<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $guarded = [
        'id',
    ];

    protected $fillable = ['position'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
    public function scopeSearch($query, $value): void
    {
        $query->where('position', 'like', "%{$value}%")
            ->orWhere('id', 'like', "%{$value}%");
    }
}
