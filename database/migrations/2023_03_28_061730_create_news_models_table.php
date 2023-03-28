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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            //$table->enum('contentType', ['Thaland','World','Business','Opinion']);
            //$table->enum('subContentType',['General','Politics','Special Report','PR News']);
            $table->string('topicName');
            //$table->string('intro');
            $table->string('articleContent');
            //$table->enum('newsStatus',['draft','enable','disable','delete']);
            $table->string('mediaHighlight');
            $table->string('mediaContent');
            $table->date('publishDate');
           // $table->string('publishDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
