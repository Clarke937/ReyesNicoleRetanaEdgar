<?php

namespace Database\Seeders;

use App\Models\Investigation_Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestigationTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Investigation_Tag::insert([
            [
                'id' => 1,
                'investigations_id' => 1,
                'tag_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'investigations_id' => 2,
                'tag_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'investigations_id' => 3,
                'tag_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'investigations_id' => 4,
                'tag_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
