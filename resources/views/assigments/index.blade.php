<style>
.form_text{
    width:100%;
    resize:none;
    text-align: center;
    height: 30vh;
}
</style>
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{$ass->assigment_name}}</h1>

    <h6>{{$ass->assigment_description}}</h6>
    @if ($validUser)
    <a href="/a/{{$ass->id}}/edit" class="btn btn-dark">Edit</a>
    <a href="/a/delete/{{$ass->id}}" class="btn btn-danger">delete</a>   
    @else
    <hr>
    @if ($hasAssigment)
        You have successfully submitted the assigment
    @else

    <form action="/a/{{$ass->id}}/submit">
            <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                            <h4>Submit</h4>
                        </div>
                        <div class="form-group row">
                            <textarea id="name" 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    name="name" 
                                    value="" 
                                    autocomplete="name" 
                                    autofocus
                                    style="resize:none;"></textarea>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row pt-2">
                                <button class="btn btn-primary">Done</button>
                        </div>
                    </div>
                </div>
        </form>
    @endif
    </div>
    @endif

</div>

@endsection