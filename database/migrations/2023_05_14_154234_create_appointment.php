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
        $now = DB::raw('CURRENT_TIMESTAMP');
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('center_id');
            $table->foreign('center_id')->references('id')->on('centers');
        });

        DB::table('appointments')->insert(
            array(
                [
                    'date' =>  '2023-05-14 18:00:00',
                    'center_id' => '1',
                    'user_id' => '1'
                ],
                [
                    'date' =>  '2023-05-14 18:00:00',
                    'center_id' => '1',
                    'user_id' => '2'
                ],
                [
                    'date' =>  '2023-05-14 17:00:00',
                    'center_id' => '1',
                    'user_id' => '3'
                ],
            )
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
