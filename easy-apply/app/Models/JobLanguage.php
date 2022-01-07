<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobLanguage extends Model
{
    use HasFactory;
    protected $fillable = [
        'language_id',
        'job_id',
    ];

    public function language() {
        return $this->belongsTo(Language::class);
    }

    public function job() {
        return $this->belongsTo(Job::class);
    }
}
