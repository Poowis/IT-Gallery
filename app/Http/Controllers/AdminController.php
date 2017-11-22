<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = DB::table('Albums_Data')->get();
        return view('admin', ['albums' => $albums]);
    }

    public function upload()
    {
        return view('upload');
    }

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
        $nameErr = $coverErr = $filesErr = '';
    	$name = $request->input('name');
    	$uploader = Auth::user()->name;
        $description = $request->input('description');
        $cover = $request->file('cover');
        $show = $request->input('show');
        $rawfiles = $request->file('files');
        $files = $this->checkfiles($rawfiles);
        $number = sizeof($files);
        $images = array();
        if (isset($name, $uploader, $cover) and $number and !$this->checkname($name)) {
            if (exif_imagetype($cover) and $number) {
                $tmp = $cover->store("public/$name");
                $tmp = explode('/', $tmp);
                $cover = $tmp[2];
                if (isset($show)) {
                    $number++;
                    array_push($images, $cover);
                }
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
                return redirect('/admin/view');
            }
            
        }
        if ($this->checkname($name)) {
            $nameErr = 'THIS NAME HAS BEEN USED';
        };
        if (!exif_imagetype($cover)) {
            $coverErr = 'CHOOSEN FILE IS NOT IMAGE';
        };
        if (!$number) {
            $filesErr = 'CHOOSEN FILES DO NOT CONTAIN IMAGE';
        };
        $data = [
            'name' => $name,
            'nameErr' => $nameErr, 
            'description' => $description,
            'coverErr' => $coverErr,
            'filesErr' => $filesErr,         
            ];
        return view('upload', $data); 
    }

    function checkid($id, $table) {
        #if id exists, return True
        $idscheck = DB::table($table)->get(['id']);
        foreach ($idscheck as $idcheck) {
            if ($idcheck->id == $id) {
                return 1;
            }
        }
        return 0;
    }

    public function delete()
    {
        return view('delete');
    }

    public function delete_album(Request $request)
    {
        $id = $request->input('id');
        if ($this->checkid($id, 'Albums_Data')) {
            $tmp = DB::table('Albums_Data')->where('id', $id)->value('name_of_album');
            Storage::deleteDirectory("public/$tmp");
            DB::table('Albums_Data')->where('id', $id)->delete();
            return redirect('/admin/view');
        }
        return view('delete', ['idErr' => 'THIS ID DOES NOT EXISTS']);
    }

    public function remove()
    {
        return view('remove');
    }

    public function remove_admin(Request $request)
    {
        $id = $request->input('id');
        if ($this->checkid($id, 'users')) {
            DB::table('users')->where('id', $id)->delete();
            return redirect('/admin/view');
        }
        return view('remove', ['idErr' => 'THIS ID DOES NOT EXISTS']);
    }
}
