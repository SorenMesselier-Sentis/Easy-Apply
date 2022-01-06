<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_id',
        'city_id',
        'address',
        'zipcode',
    ];

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function job() {
        return $this->hasOne(Job::class);
    }

    public function candidate() {
        return $this->hasOne(Candidate::class);
    }

    public function company() {
        return $this->hasOne(Company::class);
    }
}
