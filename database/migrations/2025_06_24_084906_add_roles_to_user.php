<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // table fonctionne comme un ALTER TABLE
        // met à jour les champs selon spécifications.
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user');
        });

        User::create([
            'email' => 'admin@email.com',
            'password' => \Hash::make('1234'), // commande hash laravel
            'name' => 'Administrateur',
            'role' => 'admin'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });

        User::where('email', 'admin@email.com')->first()->delete();
    }
};
