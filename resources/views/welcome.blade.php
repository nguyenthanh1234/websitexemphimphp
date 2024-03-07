@extends('templates.tpl_default', ['pageId' => 'home'])
  
<!-- @section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all">
@endsection -->
@section('content')
<div class="home">
    <h4>Phim mới ra</h4>
    <!-- <div class="container"> -->
        <div class="container">
    <div class="row align-items-start">
   
  @foreach($movies as $item)
    <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6"> -->

            <div class="col-lg-2 col-md-3 col-sm-6 col-6 p-1">
        <div class="card">
            <img src="{{asset('uploads/' . $item -> image)}}" class="card-img-top" height="280" alt="...">
            <div class="card-body">
                <h6 >{{strlen($item->name) > 19 ? substr($item->name,0,19) . '...' : $item -> name}}</h6>
                <a href="{{ url('/thong-tin-phim/' . $item->id) }}" class="btn btn-primary  d-flex justify-content-center" >Xem ngay</a>
            </div>
        <!-- </div> -->
        </div>
</div>

 @endforeach
</div>
 </div>
<!-- </div> -->
</div>
<div class="d-flex justify-content-center mt-4">
    {{$movies->appends(request()->all())-> links()}}
</div>
@endsection
<!-- @section('js')
<script src="{{ asset('js/app.js') }}"></script>
@endsection -->