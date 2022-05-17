<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user ditambahkan
        User::create([
            'id' => '083819256527',
            'name' => 'Abdul Latif',
            'email' => 'abdul@gmail.com',
            'password' => bcrypt('12345678a'),
            'aktor_id' => '2',
            'grup_id' => '1',
            'komunitas_id' => '1',
            'nohape' => '083819256527',
            'pengisi_id' => '85230360322',
        ]);
        
        // User::create([
        //     'id' => '085230360321',
        //     'name' => 'Maharani Wahyu Siwi',
        //     'email' => 'siwi@gmail.com',
        //     'password' => bcrypt('12345678a'),
        //     'aktor_id' => '2',
        //     'grup_id' => '1',
        //     'komunitas_id' => '1',
        //     'nohape' => '085230360321',
        //     'pengisi_id' => '85230360322',
        // ]);

        // User::create([
        //     'id' => '085230360323',
        //     'name' => 'Muhammad Alkaff',
        //     'email' => 'alkaff@gmail.com',
        //     'password' => bcrypt('12345678a'),
        //     'aktor_id' => '2',
        //     'grup_id' => '1',
        //     'komunitas_id' => '1',
        //     'nohape' => '085230360323',
        //     'pengisi_id' => '85230360322',
        // ]);
    }       
}
