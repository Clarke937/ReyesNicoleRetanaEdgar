<?php

namespace Database\Seeders;

use App\Models\Investigations;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InvestigationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Investigations::insert([
            [
                'id' => 1,
                'name' => 'Teclado RGB',
                'price' => 25.50,
                'quantity' => 10,
                'deleted_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
