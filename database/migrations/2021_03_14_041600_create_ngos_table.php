<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngos', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->default('default.png');
            $table->string('english_name');
            $table->string('bangla_name')->nullable();
            $table->text('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email');
            $table->string('webAddress');
            $table->integer('numberOfEmployees')->nullable();
            $table->integer('regNo');
            $table->string('status')->default('inactive');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('ngos');
    }
}
