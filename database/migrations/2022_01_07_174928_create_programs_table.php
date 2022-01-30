<?php

use App\Enums\QualificationsEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->integer('monthDuration');
            $table->string('qualification')->default(QualificationsEnum::STUDENT);
            $table->string('name');
            $table->string('shortDescription');
            $table->string('description');
            $table->integer('wages');
            $table->json('requirements');
            $table->string('howTrainingGoing');
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
        Schema::dropIfExists('programs');
    }
}
