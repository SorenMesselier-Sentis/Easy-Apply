<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateSoftskill extends Model
{
    use HasFactory;

    protected $fillable = [
      'softskill_id',
      'candidate_id',
    ];

    protected $with = ['softskill'];
    
    public function candidate() {
      return $this->belongsTo(Candidate::class);
    }

    public function softskill() {
      return $this->belongsTo(Softskill::class);
    }
}
