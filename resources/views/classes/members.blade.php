@extends('layouts.app')    
@section('content')
    <div class="container">   
        <div>
            <h3>Class Teacher:</h3>
            <li class="list-group-item">{{$class->user->name}}</li>
        </div>  
        <hr>
        <h3>Class Mates:</h3> 
        <ul class="list-group">    
          @foreach ($class->followers as $member)
            <li class="list-group-item">
              {{$member->name}}
            </li>
          @endforeach
        </ul>
    </div>

@endsection