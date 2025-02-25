<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_branches', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // اسم الفرع
            $table->foreignId('real_estate_type_id')->constrained('real_estate_types')->onDelete('cascade');

            $table->boolean('is_active')->default(true); // حالة الفرع
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
        Schema::dropIfExists('real_estate_branches');
    }
};
