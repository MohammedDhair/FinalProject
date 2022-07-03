<?php

namespace App\Http\Controllers;

use App\Models\Poject;
use Illuminate\Http\Request;

class PojectController extends Controller
{
    public function index(){
        $projects = Poject::get();
        return view('admin.projects.index',compact('projects'));
    }

    public function create(){
        return view('admin.projects.create');
    }

    public function store(Request $request){
        Poject::create([
            'title' => $request->title,
            'content' =>$request->content,
        ]);

        return redirect()->route('project.index');
    }

    public function edit($id){
        $poject = Poject::find($id);
        return view('admin.projects.edit',compact('poject'));
    }

    public function update(Request $request,$id){
        $poject = Poject::find($id);

        $poject->update([
            'title' => $request->title,
            'content' =>$request->content,
        ]);

        return redirect()->route('project.index');
    }

    public function delete($id){
        $poject = Poject::find($id);
        $poject->delete();
        return redirect()->route('project.index');
    }
}
