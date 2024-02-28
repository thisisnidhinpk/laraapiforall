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
        Schema::create('tbl__clink_patient_regs', function (Blueprint $table) {
            $table->integer('patient_no')->primary()->startingValue(1001);
            $table->string('P_name');
            $table->string('P_address')->primary()->startingValue(1001);
            $table->string('P_place')->primary()->startingValue(1001);
            $table->date('P_dob');
            $table->integer('P_age');
            $table->string('P_gender');
            $table->date('P_regdate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl__clink_patient_regs');
    }
};
