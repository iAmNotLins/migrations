<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Inserir dados na tabela 'professores'
        DB::table('professores')->insert([
            ['nome' => 'Maria Silva', 'email' => 'maria.silva@example.com', 'departamento' => 'Matemática'],
            ['nome' => 'João Santos', 'email' => 'joao.santos@example.com', 'departamento' => 'História'],
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
      //  DB::table('professores')->where('email', 'maria.silva@example.com')->delete();
    //    DB::table('professores')->where('email', 'joao.santos@example.com')->delete();
       
    }
};
