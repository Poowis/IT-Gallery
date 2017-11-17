<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{

    public function aboutupload() {
        $names = array(
            array(
                'name' => 'Poowis Kumpai', 
                'student_id' => '60070184', 
                'email' => '60070184@kmitl.ac.th',
                'facebook' => 'Poowis Kumpai',
                'line' => 'poowis42',
                'portrait' => 'poowis.jpg' 
            ),
            array(
                'name' => 'a', 
                'student_id' => 'a', 
                'email' => 'a',
                'facebook' => 'a',
                'line' => 'a',
                'portrait' => 'a' 
            ),
            array(
                'name' => 'a', 
                'student_id' => 'a', 
                'email' => 'a',
                'facebook' => 'a',
                'line' => 'a',
                'portrait' => 'a' 
            ),
            array(
                'name' => 'a', 
                'student_id' => 'a', 
                'email' => 'a',
                'facebook' => 'a',
                'line' => 'a',
                'portrait' => 'a' 
            ),
            array(
                'name' => 'a', 
                'student_id' => 'a', 
                'email' => 'a',
                'facebook' => 'a',
                'line' => 'a',
                'portrait' => 'a' 
            ),
        );
    	foreach ($names as $name) {
            DB::table('About_Data')->insert([[
                'name' => $name['name'], 
                'student_id' => $name['student_id'], 
                'email' => $name['email'],
                'facebook' => $name['facebook'],
                'line' => $name['line'],
                'portrait' => $name['portrait']
                ]]);
        }
    }
        
}
