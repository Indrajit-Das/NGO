<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNgoExecutiveCommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngo_executive_committees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('organization');
            $table->integer('order_no');
            $table->string('title_in_committee');
            $table->string('phone');
            $table->string('email');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('ngo_executive_committees');
    }
}
