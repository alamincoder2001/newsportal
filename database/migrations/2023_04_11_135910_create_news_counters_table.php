<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_counters', function (Blueprint $table) {
            $table->id();
            $table->foreignId("news_id")->constrained('news', 'id')->onDelete("cascade");
            $table->foreignId("category_id")->constrained()->onDelete("cascade");
            $table->bigInteger('read_count');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_counters');
    }
}
