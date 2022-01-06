<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'name',
        'phone_number',
        'email',
        'description',
        'user_id',
        'is_completed',
        'location_id',
        'company_size_id',
        'sector_id',

    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function companySize() {
        return $this->belongsTo(CompanySize::class);
    }

    public function sector() {
        return $this->belongsTo(Sector::class);
    }

    public function job() {
        return $this->hasMany(Job::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
