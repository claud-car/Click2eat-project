<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TypeController extends Controller
{
    public function getAll()
    {
        $types = Type::all();

        return response()->json($types);
    }
}
