<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tags::insert([
            [
            'id' => 1,
            'name' => 'Tag 1',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'id' => 2,
            'name' => 'Tag 2',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'id' => 3,
            'name' => 'Tag 3',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'id' => 4,
            'name' => 'Tag 4',
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
            ],
        ]);
    }
}
