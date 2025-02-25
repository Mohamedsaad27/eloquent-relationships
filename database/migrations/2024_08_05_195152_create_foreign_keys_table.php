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
        Schema::table('class_rooms', function(Blueprint $table) {
			$table->foreign('grade_id')->references('id')->on('Grades')
						->onDelete('cascade');
		});

        Schema::table('sections', function(Blueprint $table) {
            $table->foreign('grade_id')->references('id')->on('Grades')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foreign_keys');
    }
};
