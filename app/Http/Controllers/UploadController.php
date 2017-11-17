<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class UploadController extends Controller
{

    function checkname($name) {
        #if name exists, return True
        $namescheck = DB::table('Albums_Data')->get(['name_of_album']);
        foreach ($namescheck as $namecheck) {
            if ($namecheck->name_of_album === $name) {
                return 1;
            }
        }
        return 0;
    }

    function checkfiles($rawfiles) {
        #return array of images
        $files = array();
        foreach ($rawfiles as $rawfile) {
            if (exif_imagetype($rawfile)) {
                array_push($files, $rawfile);
            };
        };
        return $files;
    }


    public function check_then_upload(Request $request) {
        $nameErr = $uploaderErr = $coverErr = $filesErr = '';
    	$name = $request->input('name');
    	$uploader = $request->input('uploader');
        $description = $request->input('description');
        $cover = $request->file('cover');
        $rawfiles = $request->file('files');
        $images = array();
        if (isset($name, $uploader, $cover, $rawfiles) and !$this->checkname($name)) {
            $files = $this->checkfiles($rawfiles);
            $number = sizeof($files);
            if (exif_imagetype($cover) and $number) {
                $tmp = $cover->store("public/$name");
                $tmp = explode('/', $tmp);
                $cover = $tmp[2];
                foreach ($files as $file) {
                    $tmp = $file->store("public/$name");
                    $tmp = explode('/', $tmp);
                    array_push($images, $tmp[2]);
                }
                DB::table('Albums_Data')->insert([[
                    'name_of_album' => $name, 
                    'uploader' => $uploader, 
                    'description' => $description,
                    'cover' => $cover,
                    'number_of_images' => $number,
                    'images' => serialize($images)
                    ]]);
                return redirect('list');
            }
            
        }
        if (empty($name)) {
            $nameErr = 'NAME OF ALBUM IS REQUIRED';}
        elseif ($this->checkname($name)) {
            $nameErr = 'THIS NAME HAS BEEN USED';};
        if (empty($uploader)) {
            $uploaderErr = 'UPLOADER IS REQUIRED';};
        $coverErr = 'PLS SELECT COVER IMAGE AGAIN';
        $filesErr = 'PLS SELECT IMAGES AGAIN';
        if (empty($cover)) {
            $coverErr = 'COVER IMAGE IS REQUIRED';
        } elseif (!exif_imagetype($cover)) {
            $coverErr = 'CHOOSEN FILE IS NOT IMAGE';
        }
        if (empty($rawfiles)) {
            $filesErr = 'FILES IMAGE IS REQUIRED';
        } elseif (!$number) {
            $filesErr = 'CHOOSEN FILES DOES NOT CONTAIN IMAGES';
        };
        $data = [
            'name' => $name, 
            'nameErr' => $nameErr, 
            'uploader' => $uploader,
            'uploaderErr' => $uploaderErr,
            'description' => $description,
            'coverErr' => $coverErr,
            'filesErr' => $filesErr,         
            ];
        return view('upload', $data); 
    }

}
