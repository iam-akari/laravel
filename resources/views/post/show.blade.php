@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="card-header">
      <div class="text-muted small mr-3">
      {{$post->user->name}}
      </div>
    <h4>{{$post->title}}</h4>
    </div>
  <div class="card-body">
    <p class="card-text">
      {{$post->body}}
    </p>
    @if($post->image)
    <div>
      (画像ファイル：{{$post->image}})
    </div>
    <img src="{{asset('storage/images/'.$post->image)}}"
    class="img-fluid mx-auto d-block" style="height:300px;">
    @endif
  </div>
  <div class="card-footer">
    <span class="mr-2 float-right">
      投稿日時{{$post->created_at->format('Y/m/d H:i:s')}}
    </span>
  </div>
</div>

@endsection
