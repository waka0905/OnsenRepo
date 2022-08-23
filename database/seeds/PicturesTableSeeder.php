<?php

use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
        'id'=>'1'
        'img1' => '',
        'img2' => '',
    ]);
    }
}
