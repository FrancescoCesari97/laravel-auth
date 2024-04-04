<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained();
            $table->string('title', 150);
            $table->string('slug', 150);
            $table->text('content');
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
        // Schema::table('projects', function (Blueprint $table){
        //     $table->dropForeign('projects_category_id_foreign');
        //     $table->dropColumn('type_id');
        // });
        Schema::dropIfExists('projects');
    }
};
