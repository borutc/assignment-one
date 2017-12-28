<?php

namespace App\Http\Controllers;

use App\Check;
use App\Record;
use Illuminate\Http\Request;

class DataController extends Controller
{
    function index()
    {
        $check = Check::find(1);

        if($check->records == 0) {
            $content = file_get_contents('https://admin.b2b-carmarket.com//test/project');
            $pos = strpos($content, '<br>');
            $con2 = substr($content, 0, $pos);
            $on=0;
            while($pos!==false)
            {
                $list[$on] = preg_replace( "/\r|\n/", "", substr($content,0, $pos));
                $on++;
                $content = substr($content,$pos+4);
                $pos = strpos($content,'<br>');
            }

            $keys = explode(',', $list[0]);
            $keys[2] = 'name_id';

            foreach($list as $key => $item) {
                if($key > 0) {
                    $items[$key] = explode(',', $item);
                }
            }

            foreach($items as $key1 => $values) {
                $final[$key1] = array_combine($keys, $values);
            }

            Record::insert($final);
            $check->records = 1;
            $check->save();
            return view('data.index',['text' => 'Data inserted']);
        } else {
            return view('data.index',['text' => 'Data already inserted']);
        }

    }

}
