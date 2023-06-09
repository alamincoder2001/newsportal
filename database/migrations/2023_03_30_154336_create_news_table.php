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
            $table->string("unique_id", 20)->unique();
            $table->string("title");
            $table->text("subtitle")->nullable();
            $table->string("slug");
            $table->longText("description");
            // $table->foreignId("category_id")->constrained()->onDelete("cascade");
            // $table->integer("subcategory_id")->default(0);
            $table->foreignId("user_id")->constrained('admins', 'id')->onDelete("cascade");
            $table->string("image")->nullable();
            $table->string("thumbnail")->nullable();
            $table->string("other_image_1")->nullable();
            $table->string("other_image_2")->nullable();
            $table->string("other_image_3")->nullable();
            $table->string("other_image_4")->nullable();
            $table->string("other_image_5")->nullable();
            $table->string("is_published")->default('pending');
            $table->string("is_archive")->default('no');
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
        Schema::dropIfExists('news');
    }
}
