<style>
.classHeader{
    background:url('/images/img_code.jpg');
    height: 16em;
    padding: 2em;
    color:white;
    font-weight: 1000;
}
.classBtn{
    position: absolute;
    bottom: 5vh;
    right: 4vh;
    border-radius: 100px;
}
.assign{
    color:black;
}
.assignBy{
    font-size: 2.5vh;
}
.assignWhen{
    line-height: 0px;
}
</style>
@extends('layouts.app')    
@section('content')
    <div class="container">
        <div class="card classHeader">
            
            <h1>{{$class->class_name}}
                @if ($validUser)
                <a href="/a/{{$class->id}}/create" class="btn btn-primary" style="float:right">New</a>
                <a href="/c/{{$class->id}}/edit" class="btn btn-warning" style="float:right">edit</a>
                <a href="/c/delete/{{$class->id}}" class="btn btn-danger" style="float:right">delete</a>
                @endif
            </h1>
            
            <p>{{$class->discription}}</p>
            
        </div>
        <br>
        @foreach ($class->assigments as $assigment)
    <a href="/c/{{$class->id}}/a/{{$assigment->id}}">
            <div class="card">
                <div class="class-item assign" style="padding:10px;">
                    <h3 class="assignName">{{$assigment->assigment_name}} </h3>
                    <p class="assignBy"> posted by {{$name}}</p>
                    <p class="assignWhen">on {{\Carbon\Carbon::parse($assigment->created_at)->toFormattedDateString()}}</p>
                </div>
            </div>
        </a>
        @endforeach
        <div class="btn btn-secondary classBtn"><a href="/c/{{$class->id}}/members" style="color:wheat">M</a></div>
    </div>

@endsection