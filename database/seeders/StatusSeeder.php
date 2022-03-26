<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::insert([
            [
            'id' => 1,
            'name' => 'Status 1',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'id' => 2,
            'name' => 'Status 2',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'id' => 3,
            'name' => 'Status 3',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'id' => 4,
            'name' => 'Status 4',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
        ]);
    }
}
