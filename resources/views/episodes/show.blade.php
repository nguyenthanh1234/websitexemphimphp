
@extends('templates.tpl_default_admin', ['pageId' => 'showepisodes'])
@section('content_admin')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Episode View</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-text">Episode : {{ $episodes->episode }}</h5>
        <p class="card-text">Video : {{ $episodes->video }}</p>
        <p class="card-text">Movie : {{ $episodes->movie_id }}</p>
  </div>
    </hr>
  </div>
</div>
@endsection