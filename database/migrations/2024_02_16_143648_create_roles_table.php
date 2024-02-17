<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('roles', function (Blueprint $table) {
        $table->unsignedBigInteger('id')->primary();
        $table->string('name')->unique();
        $table->string('description')->nullable();
        $table->timestamps();
    });

    // Insert admin role with ID 1
    DB::table('roles')->insert([
        'id' => 1,
        'name' => 'admin',
        'description' => 'Administrator role',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Insert user role with ID 2
    DB::table('roles')->insert([
        'id' => 2,
        'name' => 'user',
        'description' => 'Regular user role',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Insert moderator role with ID 3
    DB::table('roles')->insert([
        'id' => 3,
        'name' => 'moderator',
        'description' => 'Moderator role',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
