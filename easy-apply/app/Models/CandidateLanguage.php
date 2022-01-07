<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
      'candidate_id',
      'language_id',
    ];

    protected $with = ['language'];

    public function language() {
      return $this->belongsTo(Language::class);
    }
}
