<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $collection=collect([1,2,3,4,5,6,7,8,9,10]);
        //Method 1
       // $data=$collection->all();
       // $data=$collection->avg();
      //  $data=$collection->chunk(2);
       // $data=$collection->chunk(2)->all();
        //$data=$collection->reverse(2);
$data=$collection->map(function($item,$key){
 return $item+2;
});
$data=$collection->map(function($item,$key){
 return $item+2;
})->all();



        dd($data);
        //dd($collection);
    }
}
