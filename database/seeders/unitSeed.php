<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activities\Unit;

class unitSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name' => 'Km'
        ]);

        Unit::create([
            'name' => 'Torre'
        ]);

        Unit::create([
            'name' => 'M³'
        ]);

        Unit::create([
            'name' => 'M²'
        ]);
    }
}
