<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('mail');
        });

        DB::table('users')->insert(
            array(
                [
                    'mail' => 'user1@gmail.com'
                ],
                [
                    'mail' => 'user2@gmail.com'
                ],
                [
                    'mail' => 'user3@gmail.com'
                ],
            )
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
