<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'birth_date',
      'phone_number',
      'profile_picture',
      'cv',
      'website',
      'intagram',
      'facebook',
      'linkedin',
      'is_completed',
      'status_id',
      'user_id',
      'location_id',
    ];

    protected $with = ['user', 'location', 'softskill'];

    public function user() {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function status() {
      return $this->belongsTo(Status::class, 'status_id');
    }

    public function location() {
      return $this->belongsTo(Location::class);
    }

    public function softskill() {
      return $this->hasMany(CandidateSoftskill::class);
    }

    public function education() {
      return $this->hasMany(Education::class);
    }

    public function language() {
      return $this->hasMany(CandidateLanguage::class);
    }

    public function sector() {
      return $this->hasMany(CandidateSector::class);
    }

    public function experience() {
      return $this->hasMany(Experience::class);
    }

    public function job() {
      return $this->hasMany(CandidateToJob::class);
    }
}
