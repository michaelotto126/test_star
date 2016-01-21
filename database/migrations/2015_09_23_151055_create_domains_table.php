<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->integer('template_id')->unsigned();
            $table->string('name', 128);
            $table->text('description');
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('template_id')->references('id')->on('templates');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('domains', function ($table) {
	        $table->dropForeign('domains_user_id_foreign');
			$table->dropForeign('domains_language_id_foreign');
			$table->dropForeign('domains_template_id_foreign');
	    });
        Schema::drop('domains');
    }
}
