<style>
.cardLeft{
    border-style:solid;
    border-width: 0px 0px 0px 20px;
    border-image:linear-gradient(to bottom, #36d1dc, #5b86e5) 1 100%;
}
</style>
@extends('layouts.app')

@section('content')
<div class="container">
        <div><h1>Your classes</h1></div>
    <div class="row justify-content-around">
        
        @for ($i = 0; $i < 3; $i++)
        <div style="col-sm-4 card">
                <div class="card mb-4" style="width: 300px;">
                    <div class="row no-gutters">
                        <div class="card-body cardLeft">
                            <h5 class="card-title">class_name</h5>
                            <p class="card-text">class_discription</p>
                            <p class="card-text"><small class="text-muted">created_by</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
        
    </div>
</div>
@endsection
