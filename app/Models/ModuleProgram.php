<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleProgram extends Model
{
    use HasFactory;

    protected $table = 'modules_program';

    public function program() {
        return $this->belongsTo(Program::class, 'programId', 'id');
    }
}
