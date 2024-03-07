@extends('templates.tpl_default_admin' ,['pageId' => 'createmovie'])
@section('content_admin')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Movies</div>
  <div class="card-body">
       
      <form action="{{ url('movie') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Tên phim</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Nội dung</label></br>
        <textarea class="form-control"  name="description" id="description" rows="3"></textarea>
        <label>Hình</label></br>
        <input type="file" name="filename" id="myfile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop