<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateSector extends Model
{
    use HasFactory;

    protected $fillable = [
      'candidate_id',
      'sector_id',
    ];

    public function candidate() {
      return $this->belongsTo(Candidate::class);
    }

    public function sector() {
      return $this->belongsTo(Sector::class);
    }
}
