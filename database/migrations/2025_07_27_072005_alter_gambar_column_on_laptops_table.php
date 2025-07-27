<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up()
    {
        Schema::table('laptops', function (Blueprint $table) {
            $table->text('gambar')->nullable()->change(); // ubah ke TEXT nullable
        });
    }

    public function down()
    {
        Schema::table('laptops', function (Blueprint $table) {
            $table->string('gambar', 255)->nullable()->change(); // rollback
        });
    }
};