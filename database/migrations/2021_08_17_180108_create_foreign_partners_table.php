<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->unsignedBigInteger('cost_id')
            ->nullable()
            ->after('id');
            $table->foreign('cost_id')
            ->references('id')
            ->on('costs')
            ->onDelete('SET NULL');

            $table->unsignedBigInteger('revenue_id')
            ->nullable()
            ->after('id');
            $table->foreign('revenue_id')
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
        Schema::table('partners', function (Blueprint $table) {
            $table->dropForeign('partners_cost_id_foreign');
            $table->dropColumn('cost_id');

            $table->dropForeign('partners_revenue_id_foreign');
            $table->dropColumn('revenue_id');
        });
    }
}
