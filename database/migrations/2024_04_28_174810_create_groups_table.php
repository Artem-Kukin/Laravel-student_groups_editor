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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();                 // 'id' => 1,
            $table->string('title');      // 'title' => 'Группа FS-01', // Название группы
            $table->date('start_from');   // 'start_from' => '2023-01-10', // Дата начала обучения

            $table->boolean('is_active'); // 'is_active' => true, // Начала ли группа своё обучение

            $table->timestamps(); /*'created_at' => '2023-01-01 10:00:00',
            'updated_at' => '2023-01-01 10:00:00', */

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
