
@extends('layouts.app')

@section('content')
 <div class="container">
     <form action="/c" method="POST">
        @csrf 
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h2>Create new class</h2>
                    </div>
                    <div class="form-group row">
                        <label for="class_name" class="col-md-4 col-form-label">{{ __('Class Name') }}</label>
                        <input id="class_name" 
                               type="text" 
                               class="form-control @error('class_name') is-invalid @enderror" 
                               name="class_name" 
                               value="{{ old('class_name') }}" 
                               autocomplete="class_name" 
                               autofocus>
                        @error('class_name')
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
                                value="{{ old('description') }}" 
                                autocomplete="description" 
                                autofocus>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary">Create new class</button>
                    </div>
                </div>
            </div>     
     </form>
 </div>
@endsection 