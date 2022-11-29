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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string ('title', 100);
            $table->string ('company', 100);
            $table->text ('description');
            $table->string ('tipo', 25);
            $table->string ('pageurl', 250)->default('');
            $table->string ('giturl', 250)->default ('');
            $table->date ('from');
            $table->date ('to')->nullable(true);

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
        Schema::dropIfExists('experiences');
    }
};
