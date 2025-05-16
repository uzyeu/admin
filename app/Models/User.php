<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
      public function indikators(): BelongsToMany
    {
        return $this->belongsToMany(
            Indikator::class,       // Related model
            'dinas_indikators',     // Pivot table name
            'user_id',             // Foreign key on pivot table
            'indikator_id'          // Related key on pivot table
        );
    }
    
    public function dokumenPendukungs()
    {
        return $this->hasMany(DokumenPendukung::class, 'user_id');
    }
        public function informasiIndikators(): HasMany
    {
        return $this->hasMany(InformasiIndikator::class, 'user_id');
    }
}
