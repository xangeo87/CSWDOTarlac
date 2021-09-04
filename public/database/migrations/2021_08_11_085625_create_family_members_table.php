<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->default('name');
            // $table->string('last_name', 100)->nullable()->default('last_name');
            // $table->string('middle_name', 100)->nullable()->default('middle_name');
            // $table->string('suffix', 100)->nullable()->default('suffix');
            $table->integer('age')->unsigned()->nullable()->default(1);
            $table->string('relationship', 100)->nullable()->default('relationship');
            $table->string('educational_attainment', 100)->nullable()->default('educational_attainment');
            $table->string('occupation', 100)->nullable()->default('occupation');
            $table->float('income')->nullable()->default(123.45);
            $table->bigInteger('client_file_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('client_file_id')->references('id')->on('client_files')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_members');
    }
}
