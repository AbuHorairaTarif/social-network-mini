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
            @if($article->user_id == Auth::id())
        <form action="/articles/{{$article->id}}" class="float-right" method="POST" style="margin-left: 20px">
            {{csrf_field()}}
            {{method_field('DELETE')}}
                <button class="btn btn-danger btn-sm">
                    Delete
                </button>
            </form>
            @endif
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