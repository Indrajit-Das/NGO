<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('donor');
            $table->string('typeOfProject');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('budget');
            $table->string('numberOfGroup');
            $table->string('directBeneficiaries');
            $table->string('indirectBeneficiaries');
            $table->string('workingSector');
            $table->string('workProcessExplain');
            $table->string('dncc');
            $table->string('dscc');
            $table->string('workingArea');
            $table->foreignId('ngo_id')->constrained('ngos')->onUpdate('cascade')->onDelete('cascade');
            $table->string('status')->default('upcoming');
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
        Schema::dropIfExists('projects');
    }
}
