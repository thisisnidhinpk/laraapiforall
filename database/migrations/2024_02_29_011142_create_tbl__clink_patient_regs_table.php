<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_clink_patient_regs', function (Blueprint $table) {
            //$table->integer('patient_no')->primary()->startingValue(1001);
            $table->integer('patient_no')->autoIncrement()->comment('Primary key starting from 1001');
            $table->string('P_name');
            $table->string('P_address');
            $table->string('P_place');
            $table->date('P_dob');
            $table->integer('P_age');
            $table->string('P_gender');
            $table->date('P_regdate');
        });
        //DB::statement('ALTER TABLE tbl_clink_patient_regs AUTO_INCREMENT = 1001;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_clink_patient_regs');
    }
};
