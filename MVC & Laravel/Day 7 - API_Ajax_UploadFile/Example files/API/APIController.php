<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;

class APIController extends Controller
{
    public function index()
    {
        $flowers = Flower::all();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    public function filter_by_min_price($price)
    {
        $flowers = Flower::where('price', '>=', $price)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    public function filter_by_max_price($price)
    {
        $flowers = Flower::where('price', '<=', $price)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    public function filter_by_price($minprice, $maxprice)
    {
        $flowers = Flower::whereBetween('price', [$minprice, $maxprice])->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    public function filter_by_name($name)
    {
        $flowers = Flower::where('name', 'like', "$name%")->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }
}
