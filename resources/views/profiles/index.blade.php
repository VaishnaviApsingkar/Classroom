<style>
.cardLeft{
    border-style:solid;
    border-width: 0px 0px 0px 20px;
    border-image:linear-gradient(to bottom, #36d1dc, #5b86e5) 1 100%;
}
.pImage{
    height: 60px;
    width: 60px;
    border-radius: 50%;
    
}
</style>
        @extends('layouts.app')    
        @section('content')
        <div class="container">
                <div class="row align-items-center">
                        <div class="col-12 col-md-9 col-lg-9 order-md-1">
                                @if ($user->batches->count()>0)
                                <div><h5>Classes created by you</h5></div>
                                @endif
                                <div class="row">
                                @foreach($user->batches as $c)
                                    <a href="/c/{{$c->id}}">
                                        <div style="col-sm-4 card">
                                            <div class="card mb-3" >
                                                <div class="row no-gutters">
                                                    <div class="card-body cardLeft" style="min-width:250px">
                                                        <h5 class="card-title">{{$c->class_name}}</h5>
                                                        <p class="card-text">{{$c->description}}</p>
                                                        <p class="card-text"><small class="text-muted">{{$user->name}}</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                                </div>
                                        <hr>
                                        @if ($user->following->count()>0)
                                        <div><h5>Classes joined  by you</h5></div>
                                        @endif
                                        <div class="row">
                                                @foreach($user->following as $following)
                                            <a href="/c/{{$following->id}}">
                                            <div style="col-sm-4 card">
                                                    <div class="card mb-4">
                                                        <div class="row no-gutters">
                                                            <div class="card-body cardLeft" style="min-width:250px">
                                                                <h5 class="card-title">{{$following->class_name}}</h5>
                                                                <p class="card-text">{{$following->description}}</p>
                                                                <p class="card-text"><small class="text-muted">{{\App\User::find($following->user_id)->name}}</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            @endforeach 
                                            </div>
                                </div>
                        
                        <div class="col-12 col-md-3 col-lg-3 order-md-2 aos-init aos-animate" data-aos="fade-up">
                            <div class="card text-center">
                                <div class="card-body">
                                <div style="border-radius: 100%;padding: 1em;"> 
                                    <img src="/images/profile.png" class="pImage">
                                </div>
                            Welcome, {{$user->name}}<hr>
                                <a href="/c/join" class="btn btn-outline-success">join class</a>
                                <a href="/c/create" class="btn btn-outline-dark">create class</a>
                            </div>
                            </div>
                        </div>
                      </div>


        {{-- @if ($user->batches->count()>0)
        <div><h5>Classes created by you</h5></div>
        @endif
            <div class="row justify-content-around">
                @foreach($user->batches as $c)
            <a href="/c/{{$c->id}}">
                <div style="col-sm-4 card">
                        <div class="card mb-4" style="width: 300px;">
                            <div class="row no-gutters">
                                <div class="card-body cardLeft">
                                    <h5 class="card-title">{{$c->class_name}}</h5>
                                    <p class="card-text">{{$c->description}}</p>
                                    <p class="card-text"><small class="text-muted">{{$user->name}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </a>
                @endforeach
                <hr>
            </div>
        @if ($user->following->count()>0)
        <div><h5>Classes joined  by you</h5></div>
        @endif
            <div class="row justify-content-around">
                    @foreach($user->following as $following)
                <a href="/c/{{$following->id}}">
                <div style="col-sm-4 card">
                        <div class="card mb-4" style="width: 300px;">
                            <div class="row no-gutters">
                                <div class="card-body cardLeft">
                                    <h5 class="card-title">{{$following->class_name}}</h5>
                                    <p class="card-text">{{$following->description}}</p>
                                    <p class="card-text"><small class="text-muted">{{\App\User::find($following->user_id)->name}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach 
             </div> --}}
        </div>
        @endsection
        