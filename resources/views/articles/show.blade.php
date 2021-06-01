@extends('layouts.app')

@section('content')
<div class="row my-5">
    @php
        $user=$article->user;
    @endphp
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          {{$user->name}}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->summary}}</p>
          <span class="ml-5 text-end">#{{$categories[$article->category_id]}}</span>
        </div>
      </div>
    </div> 
</div>
<div>
  <a href="/" class="btn btn-primary text-center">一覧ページ</a>
</div>

@endsection
