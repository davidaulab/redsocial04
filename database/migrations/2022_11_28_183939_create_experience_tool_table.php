<?php

use App\Models\Tool;
use App\Models\Experience;

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
        Schema::create('experience_tool', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tool::class)->constrained();
            $table->foreignIdFor(Experience::class)->constrained();

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
        Schema::dropIfExists('experience_tool');
    }
};
