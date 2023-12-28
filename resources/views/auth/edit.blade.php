
@extends('layouts.app')

@section('content')
 <div class="container">
 <form action="/a/{{$assignment->id}}" method="POST">
        @csrf 
        @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h2>Add new assignment</h2>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">{{ __('Assigment Name') }}</label>
                        <input id="name" 
                               type="text" 
                               class="form-control @error('name') is-invalid @enderror" 
                               name="name" 
                               value="{{ $assignment->assigment_name }}" 
                               autocomplete="name" 
                               autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>
                        <input id="description" 
                                type="text" 
                                class="form-control @error('description') is-invalid @enderror" 
                                name="description" 
                                value="{{ $assignment->assigment_description }}" 
                                autocomplete="description" 
                                autofocus>
                        @error('description')
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