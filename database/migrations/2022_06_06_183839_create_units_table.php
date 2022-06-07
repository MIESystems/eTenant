<?php

use App\Models\Building;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Building::class, 'building_id')->references('id')->on('buildings');
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('size')->nullable();
            $table->string('permises')->nullable();
            $table->string('condition')->nullable();
            $table->string('description')->nullable();
            $table->index('permises');
            $table->index('title');
            $table->index('name');
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
        Schema::dropIfExists('units');
    }
}
