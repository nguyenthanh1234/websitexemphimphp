@extends('templates.tpl_default_admin',['pageId' => 'editepisodes'])
@section('content_admin')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Episode</div>
  <div class="card-body">    
      <form action="{{ url('episode/' .$episode->id) }}" method="post" >
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$episode->id}}" id="id" />
        <label>Số tập</label></br>
        <input type="text" name="episode" id="idepisode" value="{{$episode->episode}}" class="form-control"></br>
        <label>Video nhúng</label></br>
        <input type="text"  class="form-control"  name="video" id="idvideo" value="{{$episode->video}}"></br>
        <label for="movies">Chọn phim:</label>
       
       <select id="movies" name="movie_id" class="mb-3">
       @foreach($movies as $item)
         <option  value="{{$item -> id}}" {{ $episode -> movie_id == $item->id ? 'selected' : '' }}>{{$item -> name}}</option>
         @endforeach
       </select>
    
       <br >
       <input type="submit" value="Save" class="btn btn-success"></br>
   </form>
    
  </div>
</div>
  
@stop