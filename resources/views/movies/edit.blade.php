@extends('templates.tpl_default_admin', ['pageId' => 'editmovie'])
@section('content_admin')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Movie</div>
  <div class="card-body">
       
      <form action="{{ url('movie/' .$movies->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$movies->id}}" id="id" />
        <label>Tên phim</label></br>
        <input type="text" name="name" id="name" value="{{$movies->name}}" class="form-control"></br>
        <label>Nội dung</label></br>
        <input type="text"  class="form-control"  name="description" id="description" value="{{$movies->description}}"></br>
        <label>Hình</label></br>
        <span>{{$movies->image}}</span>
        <input type="hidden" name="filename1" id="myfile1" value="{{$movies->image}}" class="form-control"></br>
        <input type="file" name="filename" id="myfile"  class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop