<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
    Schema::create('document_contents', function (Blueprint $table) {
        $table->id();
        $table->foreignId('document_id')->constrained()->cascadeOnDelete();
        $table->longText('content_html')->nullable();  // for doc
        $table->longText('content_json')->nullable();  // for sheet
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_contents');
    }
};
