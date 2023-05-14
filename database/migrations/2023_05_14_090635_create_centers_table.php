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
        Schema::create('centers', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('City');
            $table->string('Street');
        });

        DB::table('centers')->insert(
            array(
                [
                    'Name' => 'Hospital Clínic',
                    'City' => 'Barcelona',
                    'Street' => 'Villarroel, 170 Esc1 1r pis, Barcelona'
                ],
                [
                    'Name' => 'Germans Trias i Pujol',
                    'City' => 'Badalona',
                    'Street' => 'Carretera del Canyet, s/n, Badalona'
                ]
            )
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centers');
    }
};
