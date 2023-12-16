<?php

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
        // Check if the 'body' column does not exist before adding it
        if (!Schema::hasColumn('posts', 'body')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->text('body')->after('title')->nullable();
                // You can customize the column definition as needed
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropColumn(['body']);
        });
    }
};
