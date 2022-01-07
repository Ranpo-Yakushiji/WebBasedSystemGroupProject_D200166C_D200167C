<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Game;
use App\Models\Category;
use Session;

class GameController extends Controller
{
    public function add(){
        $r=request();
        $image=$r->file('gameImage');
        $image->move('images',$image->getClientOriginalName()); // images is the location
        $imageName=$image->getClientOriginalName();

        $addGame=Game::create([
            'name'=>$r->gameName,
            'developer'=>$r->gameDeveloper,
            'publisher'=>$r->gamePublisher,
            'platform'=>$r->gamePlatform,
            'price'=>$r->gamePrice,
            'release_date'=>$r->release_date,
            'description'=>$r->gameDescription,
            'CategoryID'=>$r->CategoryID,
            'DeveloperID'=>$r->DeveloperID,
            'image'=>$imageName,

        ]);

        Session::flash('success', "Game details created successfully!");

        return redirect()->route('showGame');
    
    }

    public function view(){
        $viewGame=DB::table('games')
        ->leftjoin('categories', 'categories.id', '=', 'games.CategoryID')
        ->select('games.*', 'categories.name as categoryName')
        ->get();
        return view('showGame')->with('games', $viewGame);
    }

    public function delete($id){
        $deleteGame=Game::find($id);
        $deleteGame->delete();
        Session::flash('success', "Game details was deleted successfully!");
        return redirect()->route('showGame');

    }

    public function edit($id){
        $games=Game::all()->where('id', $id);
        return view('editGame')->with('games', $games)
        ->with('CategoryID', Category::all());
    }

    public function update(){
        $r=request();
        $games=Game::find($r->gameID);
        
        if($r->file('gameImage')!=''){
            $image=$r->file('gameImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $games->image=$imageName;
        }    
        
        $games->name=$r->gameName;
        $games->developer=$r->gameDeveloper;
        $games->publisher=$r->gamePublisher;
        $games->platform=$r->gamePlatform;
        $games->price=$r->gamePrice;
        $games->release_date=$r->release_date;
        $games->description=$r->gameDescription;
        $games->CategoryID=$r->CategoryID;
        $games->DeveloperID=$r->DeveloperID;
        $games->save();

        Return redirect()->route('showGame');
    }

    public function viewGame(){
        $viewGame=DB::table('games')
        ->leftjoin('categories', 'categories.id', '=', 'games.CategoryID')
        ->select('games.*', 'categories.name as categoryName')
        ->get();
        return view('viewGame')->with('games', $viewGame);
    }

    public function searchGame(){

        $r=request();
        $keyword=$r->keyword;  
        $games=DB::table('games')
        ->where('games.name', 'like', '%'.$keyword.'%')
        ->leftjoin('categories', 'categories.id', '=', 'games.CategoryID')
        ->select('games.*', 'categories.name as categoryName')
        ->get();
        return view('viewGame')->with('games', $games);
    }
}
