<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->unsignedBigInteger('owner_id')
            ->nullable()
            ->after('id');
            $table->foreign('owner_id')
            ->references('id')
            ->on('revenues')
            ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->dropForeign('owner_revenue_id_foreign');
            $table->dropColumn('owner_id');
        });
    }
}
