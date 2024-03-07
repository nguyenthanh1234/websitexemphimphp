@extends('templates.tpl_default',['pageId' => 'thongtinphim'])
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-center" ><h4>{{$movies -> name }}</h4></div>
    <div class="card-body">
   
        <div class="row align-items-end">
            <div class="col-2">
            <img src="{{asset('uploads/'. $movies -> image) }}" class="card-img-top" alt="...">
            </div>
            <div class="col-10">
           
            <!-- <h6>Thể loại:</h6> -->
            <!-- <p>------------</p> -->
                <h6>Nội dung:</h6>
            {{$movies -> description }} <br>
            <a href="{{ url('/xem-phim/'. $movies -> id . "/" . $tapdautien -> id) }}" title="Xem phim"><button class="btn btn-primary mt-3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Bắt đầu xem</button></a>
            </div>
        </div>
       
</div>
</div>
<div  class="mt-3">
    <h6>Tập phim: </h6>

    @foreach($episodes as $item)
         <a href="{{ url('/xem-phim/'. $item->movie_id . "/" . $item->id) }}" title="Xem phim"><button class="btn btn-primary btn-sm mb-2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Tập {{$item->episode}}</button></a>
    @endforeach
</div>
@endsection