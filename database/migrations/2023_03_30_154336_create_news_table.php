<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("subtitle")->nullable();
            $table->string("slug");
            $table->longText("description");
            $table->foreignId("category_id")->constrained("categories", "id")->onDelete("cascade");
            $table->integer("subcategory_id")->default(0);
            $table->foreignId("user_id")->constrained("admins", "id")->onDelete("cascade");
            $table->string("image")->nullable();
            $table->string("thumbnail")->nullable();
            $table->char("status", 5)->default("a");
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
        Schema::dropIfExists('news');
    }
}
