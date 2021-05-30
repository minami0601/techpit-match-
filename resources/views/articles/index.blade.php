@extends('layouts.app')

@section('content')
<div class="row my-5">
  @foreach ($articles as $article)
    @php
        $user=$article->user;
    @endphp
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          {{$user->name}}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->summary}}</p>
          <a href="#" class="btn btn-primary">more</a>
          <span class="ml-5 text-end">{{$categories[$article->category_id]}}</span>
        </div>
      </div>
    </div> 
  @endforeach
</div>

@endsection
