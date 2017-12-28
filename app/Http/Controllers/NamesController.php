<?php

namespace App\Http\Controllers;

use App\Check;
use App\Name;
use App\Record;
use Illuminate\Http\Request;

class NamesController extends Controller
{
    public function generate() {
        return view('records.names');
    }

    public function addNames(Request $request) {
        $names = $request->all();
        $text = 'Names already inserted';
        $check = Check::find(1);
        if($check->names == 0) {
            $final = [];
            $diffbuyers = Record::select('name_id')->distinct()->get();
            foreach ($diffbuyers as $i) {
                array_push($final, $i['name_id']);
            };

            foreach ($names as $key => $name) {
                Name::insert(['id' => $final[$key], 'name' => $name['first'], 'surname' => $name['last']]);
            }
            $check->names = 1;
            $check->save();
            $text = 'Success';
        }
        return response()->json([
            'text' => $text
        ]);
    }
}
