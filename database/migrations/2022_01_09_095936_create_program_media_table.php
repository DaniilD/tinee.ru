<?php

use App\Enums\ProgramMediaTypesEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_media', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('type')->default(ProgramMediaTypesEnum::VIDEO);
            $table->string('description')->nullable();
            $table->foreignId('programId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_media');
    }
}
