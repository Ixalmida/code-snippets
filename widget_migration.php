<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Widgets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets', function (Blueprint $table) {
            // Add columns
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('type_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Add foreign keys
            $table->foreign('type_id')->references('id')->on('widget_types')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop foreign keys
        Schema::table('widgets', function (Blueprint $table) {
            $table->dropForeign('widgets_type_id_foreign');
        });

        // Drop table
        Schema::drop('widgets');
    }
}
