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
		Schema::create('guilduser', function (Blueprint $table) {
			$table->string('guildId');
			$table->string('userId');
			$table->foreign('guildId')->references('guildId')->on('guild')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('userId')->references('userId')->on('user')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->id();
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('guilduser');
	}
};
