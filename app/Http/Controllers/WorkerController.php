<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;
class WorkerController extends Controller
{
    //
    public function index(){
        $collection = (new MongoDB\Client)->Construral->workers;

        $workers = $collection->find([],[
            'limit' => 4
        ]);
        return view('admin.workers.index',['workers'=>$workers]);

    }

    public function list(){
        $collection = (new MongoDB\Client)->Construral->workers;

        $workers = $collection->find();
    
    return view('admin.workers.list',['workers'=> $workers]);
    }

}
