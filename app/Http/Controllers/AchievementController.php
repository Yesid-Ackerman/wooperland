<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
        //
        public function create(){

            return view('logros.achievement');
    
        }
    
        public function store(Request $request){
            $achievement = new Achievement();
            $achievement->name=$request->name;
            $achievement->description=$request->description;
            $achievement->prize=$request->prize;
            $achievement->level=$request->level;
            $achievement->save();
            return $request;
         }
    
        public function index(){
    
            $achievements = Achievement::orderBy('id', 'desc')->get();
            return view('logros/listar', compact('achievements'));
        }
         public Function show ($id){
    
            $achievement=Achievement::find($id);
            $achievement;
            return view('logros/show', compact('achievement'));
    
        }
        public function destroy($id) {
            $achievement = Achievement::findOrFail($id);
            $achievement->delete();
            return redirect()->route('achievement.index');
        }
    }
    
