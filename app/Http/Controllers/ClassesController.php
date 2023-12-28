<?php

namespace App\Http\Controllers;
use App\Batch;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($class)
    {   
        $validUser =false;
        $class = Batch::findOrFail($class);
        $name=\App\User::find($class->user_id)->name;
        $assigments = $class->assigments();
        if($class->user_id === auth()->user()->id){
            $validUser = true;
        }
        return view('classes.index',compact('class','name','assigments','validUser'));
    }


    public function create()
    {
        return view('classes.create');
    }


    public function store()
    {   $data=request()->validate([
            'class_name'=>'required',
            'description'=>'required', 
            'file'=>''
        ]);
        auth()->user()->batches()->create($data);
        return redirect('/p');
    }

    public function edit($id)
    {
        $class = \App\Batch::find($id);
        if(auth()->user()->id === $class->user_id)
            return view('classes.edit',compact('class'));
        else{
            return back();
        }
    }

    public function update($id)
    {
        $batch=\App\Batch::find($id);
        if(auth()->user()->id === $batch->user_id)
        
        $data = request()->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        // dd($data);
        $batch->update([
            'class_name'=>$data['name'],
            'description'=>$data['description'],
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/c/'.$batch->id);
    }
    
    public function delete($id)
    {
        $class=\App\Batch::findOrFail($id);
        if(auth()->user()->id === $class->user->id){
            $class->delete();
            return redirect('/p');
        }
        else{
            return redirect('/p');
        }
    }


    public function join()
    {
        return view('classes.join');
    }


    public function join_confirm()
    {
        $data=request()->validate([
            'classCode'=>'required'
        ]);
        if(auth()->user()->following()->where('batch_id',$data['classCode'])->exists()){
            
            return redirect('/p');
        }
        else if(auth()->user()->batches()->where('id',$data['classCode'])->exists()){
            dd('you have created this class');
            return redirect('/p');
        }
        else{
            auth()->user()->following()->attach([
                'batch_id'=>$data['classCode']
                ]);
            return redirect('/p');
        }
    }
    public function members($id)
    {
        $class = \App\Batch::findOrFail($id);
        return view('classes.members',compact('class'));
    }

}
