<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_details')->insert([
            'phone_1'  => '1111111111',
            'phone_2'  => '1111111111',
            'email_1'  => 'test@gmail.com',
            'email_2'  => 'test2@gmail.com',
            'facebook' => "",
            'twitter' => "",
            'instagram' => "",
            'linkdin' => "",
            'about' => '',
        ]);    
    }
}
