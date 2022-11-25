<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    public function index()
    {
        // $songs = DB::select('SELECT * FROM songs');
        $songs = DB::table('songs')->get();

        // dd($songs);
        return view('songs', ['songs' => $songs]);
    }

    public function show($id)
    {
        if (is_numeric($id))
            return 'Display song id : ' . $id;
        else
            return 'Song id is wrong';
    }

    // Display the form
    public function create()
    {
        return view('new-song');
    }

    public function insert(Request $request)
    {
        return 'Lets try to insert : ' . $request->title;
    }
}
