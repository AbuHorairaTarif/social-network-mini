@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-4 offset-md-4">
    <div class="card">
        <div class="card-header">
        <span>Abu Horaira</span>
        <small>
        <a href="/articles/{{$article->id}}/edit">Edit</a>
        </small>
        <span class="float-right">{{$article->created_at->diffForHumans()}}</span>
        </div>
        <div class="card-body">
           {{ $article->content }}
        </div>
        <div class="card-footer clearfix bg-white">
            <i class="fa fa-heart float-right" aria-hidden="true"></i>
        </div>
      </div>
</div>


</div>

@endsection