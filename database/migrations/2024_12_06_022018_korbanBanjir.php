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
        Schema::create('korbanBanjir', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('daerah_id');
            $table->string('nama', 54);
            $table->text('alamat');
            $table->integer('umur');
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->onUpdate(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('deleted_at')->nullable();

            $table->foreign('daerah_id')->references('id')->on('daerah')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('korbanBanjir');
    }
};
