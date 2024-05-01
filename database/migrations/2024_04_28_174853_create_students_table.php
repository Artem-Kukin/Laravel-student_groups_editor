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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // 'id' => 1,
            $table->unsignedBigInteger('group_id'); // 'group_id' => 1, // ID группы
            $table->string('surname'); // 'surname' => 'Петров', // Фамилия студента
            $table->string('name'); // 'name' => 'Иван', // Имя студента         

            $table->foreign('group_id')->references('id')->on('groups')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();/* 'created_at' => '2023-01-01 10:00:00',
            'updated_at' => '2023-01-01 10:00:00'*/

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
