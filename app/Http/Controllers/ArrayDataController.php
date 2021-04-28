<?php

namespace App\Http\Controllers;

use App\Models\ArrayData;
use Illuminate\Http\Request;

class ArrayDataController extends Controller
{
    public function create()
    {
        ArrayData::create([
        'random_list' => [1,2,3],
        ]);
        return 'done';
    }
    public function index()
    {
        $data = ArrayData::find(1);
        dd($data->random_list);
    }
}
