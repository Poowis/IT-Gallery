<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@default',
            'password' => bcrypt('defaultadmin')
            ]);
        $this->call(AboutTableSeeder::class);
    }
}
