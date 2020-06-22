@extends('layouts.app')

@section('content')
<div class="row">
@foreach ($articles as $article)
<div class="col-md-4 offset-md-4">
    <div class="card">
        <div class="card-header">
        <span>Abu Horaira</span>
        <span class="float-right">{{$article->created_at->diffForHumans()}}</span>
        </div>
        <div class="card-body">
           {{ $article->shortContent }}
        <a href="/articles/{{$article->id}}">Read more</a>
        </div>
        <div class="card-footer clearfix bg-white">
            <i class="fa fa-heart float-right" aria-hidden="true"></i>
        </div>
      </div>
</div>

@endforeach

</div>

<div class="row">
    <div class="col-md-4 offset-md-4">
        {{$articles->links()}}
    </div>
    </div>
@endsection