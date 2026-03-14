<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id(); // العمود الأساسي
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade'); // مفتاح خارجي للكتب
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // مفتاح خارجي للطلاب
            $table->date('loan_date'); // تاريخ الإعارة
            $table->timestamps(); // created_at و updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};

