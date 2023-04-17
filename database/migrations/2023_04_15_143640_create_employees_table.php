<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('mobile', 100)->unique();
            $table->string('gender', 20);
            $table->date('join_date');
            $table->date('birth_date');
            $table->string('nid_no', 20)->unique();
            $table->foreignId('designation_id')->constrained()->onDelete('cascade');
            $table->foreignId('department_id')->constrained()->onDelete('cascade');
            $table->string('father_name', 100)->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->text('present_address', 500)->nullable();
            $table->text('permanent_address', 500)->nullable();
            $table->decimal('salary', 16, 2);
            $table->string('nid_file', 191)->nullable();
            $table->string('photo', 191)->nullable();
            $table->foreignId('addedBy')->constrained('admins', 'id')->onDelete('cascade');
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
        Schema::dropIfExists('employees');
    }
}
