<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contracts', function (Blueprint $table) {
            $table->enum('status_id', [0, 1, 2, 3, 4])->comment('0=>active,1=>expired,2=>terminated,3=>renewed,4=>pending')->after('type_id');
            $table->string('atesting_document_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contracts', function (Blueprint $table) {
            $table->dropColumn('status_id');
            $table->dropColumn('atesting_document_number');
        });
    }
}
