@extends('templates.tpl_default',['pageId' => 'xemphim'])
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-left" ><h4>Đang xem tập {{$episode ->episode }}</h4></div>
    <div class="card-body d-flex justify-content-center">
    {!!$episode ->video!!}
    </div>
</div>
<div class="mt-3">
    <h6>Tập phim: </h6>

    @foreach($episodes as $item)
        @if($item -> movie_id == $movieid)
            <a href="{{ url('/xem-phim/'. $item->movie_id . "/" . $item->id) }}" title="Xem phim"><button class="btn btn-primary btn-sm  mb-2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Tập {{$item->episode}}</button></a>
        @endif
    @endforeach
</div>
@endsection