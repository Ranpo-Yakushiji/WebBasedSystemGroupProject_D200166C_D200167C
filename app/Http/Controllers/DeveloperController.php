<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //import database library
use App\Models\Developer; //import developer models 
use Session;

class DeveloperController extends Controller
{

    public function add(){
        $r=request();
        $image=$r->file('developerImage');
        $image->move('images',$image->getClientOriginalName()); // images is the location
        $imageName=$image->getClientOriginalName();

        $addDeveloper=Developer::create([
            'name'=>$r->developerName,
            'founder'=>$r->developerFounder,
            'headquarters'=>$r->developerHeadquartes,
            'game'=>$r->developerGame,
            'image'=>$imageName,

        ]);

        Session::flash('success', "Developer details created successfully!");

        return redirect()->route('showDeveloper');
    
    }
 
    public function view(){
        $viewDeveloper = Developer::all(); //generate sql select * from developers
        Return view ('showDeveloper') ->with('developers', $viewDeveloper);
    }

    public function delete($id){
        $deleteDeveloper=Developer::find($id);
        $deleteDeveloper->delete();
        Session::flash('success', "Developer details was deleted successfully!");
        return redirect()->route('showDeveloper');

    }

    public function edit($id){
        $developers=Developer::all()->where('id', $id);
        return view('editDeveloper')->with('developers', $developers);
    }

    public function update(){
        $r=request();
        $developers =Developer::find($r->developerID);
        
        if($r->file('developerImage')!=''){
            $image=$r->file('developerImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $developers->image=$imageName;
            }    
        
        $developers->name=$r->developerName;
        $developers->founder=$r->developerFounder;
        $developers->headquarters=$r->developerHeadquartes;
        $developers->game=$r->developerGame;
        
        $developers->save();

        return redirect()->route('showDeveloper');
    }

    
    public function viewDeveloper(){
        $developers = Developer::all();
        return view('viewDeveloper')->with('developers', $developers);
    }

}
