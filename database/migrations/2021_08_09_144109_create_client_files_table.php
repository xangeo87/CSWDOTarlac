<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_files', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100)->nullable()->default('first_name');
            $table->string('last_name', 100)->nullable()->default('last_name');
            $table->string('middle_name', 100)->nullable()->default('middle_name');
            $table->string('suffix', 100)->nullable()->default('suffix');
            $table->string('civil_status', 100)->nullable()->default('civil_status');
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth', 100)->nullable()->default('place_of_birth');
            $table->string('educational_attainment', 100)->nullable()->default('educational_attainment');
            $table->string('occupation', 100)->nullable()->default('occupation');
            $table->float('income')->nullable()->default(123.45);
            $table->string('home_address', 100)->nullable()->default('home_address');
            $table->string('barangay', 100)->nullable()->default('barangay');
            $table->string('name_of_hospital', 100)->nullable()->default('name_of_hospital');
            $table->date('date_of_admission')->nullable();
            $table->date('date_of_discharge')->nullable();
            $table->string('name_of_attending_md', 100)->nullable()->default('name_of_attending_md');
            $table->string('diagnosis', 100)->nullable()->default('diagnosis');
            $table->longText('narrative')->nullable();
            $table->string('problem_presented_1', 100)->nullable()->default('problem_presented_1');
            $table->string('problem_presented_2', 100)->nullable()->default('problem_presented_2');
            $table->string('recommendation', 100)->nullable()->default('recommendation');
            $table->string('slug')->index()->nullable()->default('slug');
            $table->string('image')->nullable()->default('image');
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
        Schema::dropIfExists('client_files');
    }
}
