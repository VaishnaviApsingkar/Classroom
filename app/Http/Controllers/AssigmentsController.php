<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssigmentsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($cid,$aid)
    {
        $validUser =false;
        $ass = \App\Assigments::findOrFail($aid);
        if($ass->user_id === auth()->user()->id){   
            $validUser = true;
        }
        $hasAssigment = auth()->user()->assignments()->where('assigments_id', $aid)->exists();

        return view('assigments.index',compact('ass','validUser','hasAssigment'));
    }

    public function create($id)
    {
        return view('assigments.create',compact('id'));
    }

    public function store($id)
    {
        $data = request()->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $class=\App\Batch::findOrFail($id);
        $class->assigments()->create([
            'assigment_name'=>$data['name'],
            'assigment_description'=>$data['description'],
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/c/'.$id);
    }

    public function edit($id)
    {
        $assignment = \App\Assigments::findOrFail($id);
        return view('assigments.edit',compact('assignment'));
    }

    public function update($id)
    {
        $data = request()->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        
        $assigment=\App\Assigments::find($id);
        // dd($assigment);
        $assigment->update([
            'assigment_name'=>$data['name'],
            'assigment_description'=>$data['description'],
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/c/'.$assigment->batch_id.'/a/'.$id);
    }

    public function delete($id)
    {
        $assigment=\App\Assigments::findOrFail($id);
        $cid = $assigment->batch_id;
        if(auth()->user()->id === $assigment->user_id){
            $assigment->delete();
            return redirect('/c/'.$cid);
        }
        else{
            return redirect('/c/'.$cid);
        }
    }
    public function submit($id)
    {
        $data = request()->validate([
            'name'=>'required'
        ]);
       
        $assigment=\App\Assigments::find($id);
        auth()->user()->assignments()->attach([
            'assigment_id'=>$id,
            
        ]);
        return \redirect('/p');
    }
}
