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
        Schema::table('alifs', function (Blueprint $table) {
            $table->string('gender', 1)->nullable()->after('name')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alifs', function (Blueprint $table) {
            $table->string('gender', 10)->nullable(false)->after('name')->change();
        });
    }
};
