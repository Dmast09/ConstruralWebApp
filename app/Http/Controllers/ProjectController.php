<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;
class ProjectController extends Controller
{
    //
    public function home(){
        $collection = (new MongoDB\Client)->Construral->projects;
        $project = $collection->find([],[
            'limit' => 3
        ]);
        return view('home', ['project' => $project]);
    }

    public function Index(){
        $collection = (new MongoDB\Client)->Construral->projects;
        $projects = $collection->find();

        return view('admin.projects.index',['projects' => $projects]);
    }


    public function create(){
        $collection = (new MongoDB\Client)->Construral->projects;
        $project =(object)[
            "Project_name" => request("Project_Name"),
            "Date" => request("Project_Date"),
            "Chief" => request("Project_Chief"),
            "Description" => request("Project_Description")
        ];
        $insertOneResult = $collection->InsertOne($project);
        if($insertOneResult ->getInsertedCount() == 1 )
            return redirect(route('projectindex'));
        
    }

    public function details($id){
        $collection = (new MongoDB\Client)->Construral->projects;
 
        $project = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        
        return view('admin.projects.details',['project' => $project]);
    }

    public function delete($id){
        $collection = (new MongoDB\Client)->Construral->projects;

        $project = $collection->findOne(["_id"=> new MongoDB\BSON\ObjectId($id)]);

        return view('admin.projects.delete', ['project' => $project]);
    }

    public function remove($id){
        $collection = (new MongoDB\Client)->Construral->projects;
        $delrec = $collection->deleteOne(["_id"=>new MongoDB\BSON\ObjectId($id)]);
        if($delrec -> getdeletedCount()==1)
            return redirect(route('projectindex'));
            
    }

    public function show($id){
        $collection = (new MongoDB\Client)->Construral->projects;
        $project = $collection->findOne(["_id"=> new MongoDB\BSON\ObjectId($id)]);

        return view('admin.projects.edit',['project' => $project]);
    }

    public function update(){
        $collection = (new MongoDB\Client)->Construral->projects;
        $project = [
                'Project_name' => request("Project_Name"), 
                'Date' => request("Project_Date"),
                'Chief' => request("Project_Chief"),
                'Description' => request("Project_Description")
        ];
        $updatresult = $collection->updateOne(
            [
                "_id" => new MongoDB\BSON\ObjectId(request("projectid"))
            ],[
                '$set' => $project
            ]
            );
        
        if($updatresult->getModifiedCount()==1)
            return redirect(route('projectindex'));
    
    
    }

    public function prueba(){
        $collection = (new MongoDB\Client)->Construral->projects;
        $collection2 = (new MongoDB\Client)->Construral->workers;
        $projects = $collection->find();
        $workers = $collection2->find();
        return view('.prueba',['projects' => $projects],['workers'=>$workers]);


    }

    
}
