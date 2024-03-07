@extends('templates.tpl_default_admin', ['pageId' => 'qlepisodes'])

@section('content_admin')
<div class="col-12">
                <div class="card">
                    <div class="card-header">
    <h2 >Quản lý tập phim</h2>
</div>
                    <div class="card-body">
                        <a href="{{ url('/episode/create') }}" class="btn btn-success btn-sm" title="Add New Episode">
                            Add New
                        </a>
                        <br/>
                    
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Episode</th>
                                        <th>Video</th>
                                        <th>Movie</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($episodes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ strlen($item->episode ) > 30 ? substr($item->episode,0,30) . '...' : $item->episode}}</td>
                                        <td >{{strlen($item->video) > 30 ? substr($item->video,0,30) . '...' : $item->video}}</td>
                                        <td >{{strlen($item->movie_id) > 30 ? substr($item->movie_id,0,30) . '...' : $item->movie_id}}</td>
                                        <td>
                                            <a href="{{ url('/episode/' . $item->id) }}" title="View Episode"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/episode/' . $item->id . '/edit') }}" title="Edit Episode"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/episode' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Episode" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
</tbody>
</table>                        
</div>
</div>
<div class="d-flex justify-content-center">
    {{$episodes->appends(request()->all())-> links()}}
</div>
</div>


@endsection
