@extends('templates.tpl_default_admin', ['pageId' => 'createepisodes'])
@section('content_admin')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Episode</div>
  <div class="card-body">
       
      <form action="{{ url('episode') }}" method="post" >
        {!! csrf_field() !!}
        <label>Số tập phim</label></br>
        <input type="number" name="episode" id="tapphimtoi" class="form-control"></br>
        <label>Link nhúng video</label></br>
        <input type="text" name="video" id="myvideo" class="form-control"></br>
        <label for="movies">Chọn phim:</label>
       
        <select id="movies" name="movie_id" class="mb-3">
        @foreach($movies as $item)
          <option value="{{$item -> id}}">{{$item -> name}}</option>
          @endforeach
        </select>
     
        <br >
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop