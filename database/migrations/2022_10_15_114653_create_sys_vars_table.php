<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSysVarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_vars', function (Blueprint $table) {
            $table->string('col', 50)->primary();
            $table->string('val', 300);
        });

        // Insert some stuff
        DB::table('sys_vars')->insert(
            array(
                'col' => 'themes',
                'val' => 'FlexStart'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_vars');
    }
}
