<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */


    public function up(): void
    {
        Schema::create('zone', function (Blueprint $table) {
            $table->id();
            $table->string('danger');
            $table->string('quantite');
            $table->date('date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->unsignedBigInteger('minerai_id');
            $table->foreign('minerai_id')
                ->references('id')
                ->on('minerai')
                ->onDelete('cascade');

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zone');
    }
};