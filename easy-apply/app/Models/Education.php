<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
      'label',
      'start_date',
      'end_date',
      'degree_id',
      'candidate_id',
      'diploma_id',
    ];

    public function candidate() {
      return $this->belongsTo(Candidate::class);
    }

    public function degree() {
      return $this->belongsTo(Degree::class);
    }

    public function diploma() {
      return $this->belongsTo(Diploma::class);
    }
}
