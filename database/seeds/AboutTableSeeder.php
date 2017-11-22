<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = array(
            array(
                'name' => 'Poowis Kumpai', 
                'student_id' => '60070184', 
                'email' => '60070184@kmitl.ac.th',
                'facebook' => 'Poowis Kumpai',
                'line' => 'poowis42',
                'portrait' => 'poowis.png' 
            ),
            array(
                'name' => 'Satawat Thitisupakul', 
                'student_id' => '60070093', 
                'email' => 's_nack@hotmail.com',
                'facebook' => 'Nack Thitosipakul',
                'line' => 'satawatnack',
                'portrait' => 'Nack.jpg' 
            ),
            array(
                'name' => 'Ingkarat Tinnakornsrisupap', 
                'student_id' => '60070119', 
                'email' => 'ingkaratt@gmail.com',
                'facebook' => "I'Ing Karat",
                'line' => 'ingkaratin',
                'portrait' => 'ing.jpg' 
            ),
            array(
                'name' => 'Apinan Pongraanachote', 
                'student_id' => '60070112', 
                'email' => 'dark_camry@hotmsil.com',
                'facebook' => 'junior spiritr pogratanachote',
                'line' => 'junior_sr',
                'portrait' => 'junior.jpg' 
            ),
            array(
                'name' => 'Rachapat Permpool', 
                'student_id' => '60070083', 
                'email' => '60070083@it.kmil.ac.th',
                'facebook' => 'Ratchapat Permpool',
                'line' => 'torasantr',
                'portrait' => 'ToRaSan.jpg' 
            ),
        );
    	foreach ($names as $name) {
            DB::table('About_Data')->insert([
                'name' => $name['name'], 
                'student_id' => $name['student_id'], 
                'email' => $name['email'],
                'facebook' => $name['facebook'],
                'line' => $name['line'],
                'portrait' => $name['portrait']
                ]);
        }
    }
}
