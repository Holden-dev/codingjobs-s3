<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlowerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Flower;

class FlowerController extends Controller
{
    public function index()
    {
        $flowers = Flower::all();

        return view('all-flowers', ['flowers' => $flowers]);
    }

    public function show($id)
    {
        $flower = Flower::find($id);

        return view('flower-detail', ['flower' => $flower]);
    }

    public function create()
    {
        return view('new-flower');
    }

    public function insert(StoreFlowerRequest $request)
    {
        // First: validations
        $validated = $request->validated();

        // Then : insert
        $flower = new Flower;
        $flower->name = $request->name;
        $flower->price = $request->price;
        $result = $flower->save();

        if ($result)
            return redirect('/flowers')->with('message', 'Successfully insert in the DB !');
        else
            echo "problem inserting";
    }

    public function edit($id)
    {
        $flower = Flower::find($id);

        return view('edit-flower', ['flower' => $flower]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:30',
            'price' => 'required|numeric|between:2,100',
        ]);

        $flower = Flower::find($id);
        $flower->name = $request->name;
        $flower->price = $request->price;
        $result = $flower->save();

        // $result = DB::table('flowers')
        //     ->where('id', $id)
        //     ->update(['name' => $request->name, 'price' => $request->price]);

        if ($result)
            return redirect('/flowers')->with('message', $request->name . ' updated successfully.');
        else
            echo "problem inserting";
    }

    public function destroy($id)
    {
        // delete
        $result = Flower::destroy($id);

        if ($result)
            return redirect('/flowers')->with('message', 'Flower deleted successfully.');
        else
            return redirect('/flowers')->with('error', 'Problem deleted the flower');
    }
}
