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
        Schema::table('rankings', function (Blueprint $table) {
            $table->integer('min_referral')->default(0);
            $table->double('min_invest');
            $table->double('team_min_invest');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rankings', function (Blueprint $table) {
            $table->dropColumn('min_referral');
            $table->dropColumn('min_invest');
            $table->dropColumn('team_min_invest');
        });
    }
};
