<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        return 'Lets display all the songsssssssssssss!';
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
