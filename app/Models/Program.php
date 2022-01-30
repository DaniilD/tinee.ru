<?php

namespace App\Models;

use App\Enums\ProgramMediaTypesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'programs';

    public function location() {
        return $this->belongsTo(Location::class, 'locationId', 'id');
    }

    public function company() {
        return $this->belongsTo(Company::class, 'companyId', 'id');
    }

    public function modules() {
        return $this->hasMany(ModuleProgram::class, 'programId', 'id');
    }

    public function medias() {
        return $this->hasMany(ProgramMediaTypesEnum::class, 'programId', 'id');
    }
}
