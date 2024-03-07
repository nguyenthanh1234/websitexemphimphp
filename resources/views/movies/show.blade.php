@extends('templates.tpl_default_admin', ['pageId' => 'showmovie'])
@section('content_admin')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Movies Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $movies->name }}</h5>
        <p class="card-text">Description : {{ $movies->description }}</p>
        <p class="card-text">Image : {{ $movies->image }}</p>
  </div>
    </hr>
  </div>
</div>
@endsection