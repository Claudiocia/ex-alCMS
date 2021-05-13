<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateExPresidentesTable.
 */
class CreateExPresidentesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ex_presidentes', function(Blueprint $table) {
            $table->id();
            $table->year('inicio');
            $table->year('final');
            $table->text('msg');
            $table->enum('publica', ['s', 'n'])->default('s');
            $table->string('foto_path')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id');
            $table->softDeletes();
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
		Schema::drop('ex_presidentes');
	}
}