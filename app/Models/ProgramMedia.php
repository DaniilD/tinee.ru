<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramMedia extends Model
{
    use HasFactory;

    protected $table = 'program_media';

    public function program() {
        return $this->belongsTo(Program::class, 'programId', 'id');
    }
}
