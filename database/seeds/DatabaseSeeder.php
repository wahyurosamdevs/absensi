<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            'name' => 'wahyu rosam hidayat',
            'email' => 'wahyurosamdev@gmail.com',
            'username' => 'wahyurosamdev',
            'password' => Hash::make('wahyurosamdev'),
            'level' => 'admin',
      ]);
    }
}
