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
            'title' => 'Investigacion 1',
            'description' => 'Descripcion para investigacion 1',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'id' => 2,
            'title' => 'Investigacion 2',
            'description' => 'Descripcion para investigacion 2',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'id' => 3,
            'title' => 'Investigacion 3',
            'description' => 'Descripcion para investigacion 3',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'id' => 4,
            'title' => 'Investigacion 4',
            'description' => 'Descripcion para investigacion 4',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
        ]);
    }
}
