<?php

namespace App\Http\Controllers;

use App\Name;
use App\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RecordsController extends Controller
{

    public function index()
    {
        if(request()->search){
            if(request()->select == 'date'){
                $records = Record::where('saleDate', 'like', '%'.request()->search.'%')->paginate(10);
            } else {
                $name = Name::where(request()->select, 'like', '%'.request()->search.'%')->firstOrFail()->id;

                $records = Record::where('name_id', 'like', '%'.$name.'%')->paginate(10);
           }

        }else {
            $records = Record::paginate(10);
        }

        return view('records.index',['records' => $records]);
    }

}
