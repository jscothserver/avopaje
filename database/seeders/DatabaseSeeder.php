<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        User::factory()->withPersonalTeam()->create([
            'name' => 'Juan Torres',
            'email' => 'jscothserver@gmail.com',
        ]);
        DB::table('customers')->insert([
            ['empresa' => 'D Campo', 'name' => 'Juan Luis Maciel', 'rfc' => 'MACJ123456', 'phone' => '1234567890'],
            ['empresa' => 'Avofel', 'name' => 'Carlos Cardenas', 'rfc' => '', 'phone' => ''],
        ]);
        DB::table('referentes')->insert([
            ['customer_id' => 1, 'nombre' => 'Charal', 'phone' => '1234567890'],
            ['customer_id' => 1, 'nombre' => 'Nalgas pachas', 'phone' => '898989898'],
        ]);
        DB::table('acopios')->insert([
            ['customer_id' => 1, 'name' => 'Salvador Prado', 'phone' => '1234567890'],
            ['customer_id' => 1, 'name' => 'Guillermo', 'phone' => '1234567890'],
        ]);
        DB::table('procesos')->insert([
            ['proceso' => 'Seleccion'],
            ['proceso' => 'Mallas'],
            ['proceso' => 'Reempaque'],
        ]);
        DB::table('boxes')->insert([
            ['name' => 'Campo 20 Kgs', 'peso' => 2.3, 'capacidad' => 20],
            ['name' => 'Campo 25 Kgs', 'peso' => 2.3, 'capacidad' => 25],
            ['name' => 'Campo 30 Kgs', 'peso' => 2.5, 'capacidad' => 30],
        ]);
        DB::table('tarimas')->insert([
            ['name' => 'Negra', 'peso' => 20],
            ['name' => 'Roja', 'peso' => 19.5],
        ]);
    }
}
