@extends('layouts.app')

<style type="text/css">
.profile-img{
    max-width: 150px;
    border: 3px solid #fff;
    border-radius: 100%;
    box-shadow: 0 2px 2px rgba(0,0,0,0.3);
}
</style>

@section('content')
<div class="row">
<div class="col-md-6 offset-md-3">
    <div class="card text-center">
        <div class="card-body">
          <img class="profile-img" src="https://www.w3schools.com/w3images/avatar2.png">
        <h1 class="display-4">{{$user->name}}</h1>
        <h5 class="">{{$user->email}}</h5>
        <h5 class="">{{$user->dob->format('j-F-Y, l')}} ({{$user->dob->age}} years old)</h5>
        {{-- <h5 class="">{{$user->dob}} ({{ Carbon\Carbon::createFromFormat('Y-m-d',$user->dob)->age}} years old)</h5> --}}
        <button class="btn btn-success">Follow</button>
        </div>
      </div>
</div>
</div>
@endsection