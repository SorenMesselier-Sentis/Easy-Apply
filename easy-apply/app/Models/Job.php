<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
        'location_id',
        'working_mode_id',
        'contract_mode_id',
        'company_id',
        'sector_id',
        'description',
        'salary',
        'archive_date',
    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }
    
    public function workingMode() {
        return $this->belongsTo(WorkingMode::class);
    }
    
    public function contractType() {
        return $this->belongsTo(ContractType::class);
    }
    
    public function company() {
        return $this->belongsTo(Company::class);
    }
    
    public function sector() {
        return $this->belongsTo(Sector::class);
    }

    public function jobTag() {
        return $this->hasMany(JobTag::class);
    }
}
