<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class MainController extends Controller
{

    public function showhome() {
        $names = DB::table('About_Data')->get();
        $albums = DB::table('Albums_Data')->get()->reverse();
        if (count($albums) >= 3) {
            return view('home', ['albums' => array($albums[0], $albums[1], $albums[2]), 'names' => $names]);
        }
        elseif (count($albums) == 2) {
            return view('home', ['albums' => array($albums[0], $albums[1]), 'names' => $names]);
        }
        elseif (count($albums) == 1) {
            return view('home', ['albums' => array($albums[0]), 'names' => $names]);
        }
    }
    
    public function showlist() {
        $albums = DB::table('Albums_Data')->get()->reverse();
        return view('list_of_albums', ['albums' => $albums]);
    }

    public function showalbum($name) {
        $album = DB::table('Albums_Data')->where('name_of_album', $name)->first();
        return view('album', ['album' => $album, 'images' => unserialize($album->images)]);
    }

}
