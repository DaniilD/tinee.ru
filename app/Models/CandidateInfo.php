<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateInfo extends Model
{
    use HasFactory;

    protected $table = 'candidate_info';

    public function user() {
        return $this->belongsTo(CandidateInfo::class, 'candidateInfoId', 'id');
    }
}
