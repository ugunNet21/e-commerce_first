<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'RAM'
        ]);
        DB::table('categories')->insert([
            'name' => 'komputer'
        ]);
        DB::table('categories')->insert([
            'name' => 'printer'
        ]);
        DB::table('categories')->insert([
            'name' => 'camera'
        ]);
        DB::table('categories')->insert([
            'name' => 'pointer'
        ]);
        DB::table('categories')->insert([
            'name' => 'mouse'
        ]);

    }
}
