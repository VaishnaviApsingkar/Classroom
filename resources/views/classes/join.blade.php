
@extends('layouts.app')

@section('content')
 <div class="container">
 <form action="/c/j/confirm" method="POST">
        @csrf 
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h2>Join new classroom! </h2>
                        <p> (^_^) All the best! </p>
                    </div>
                    <div class="form-group row">
                        <label for="classCode" class="col-md-4 col-form-label">{{ __('Class code') }}</label>
                        <input id="classCode" 
                               type="text" 
                               class="form-control @error('classCode') is-invalid @enderror" 
                               name="classCode" 
                               value="" 
                               autocomplete="classCode" 
                               autofocus>
                        @error('classCode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary">Done</button>
                    </div>
                </div>
            </div>   
     </form>
 </div>
@endsection 