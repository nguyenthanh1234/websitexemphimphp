@extends('templates.tpl_default_admin', ['pageId' => 'qlmovie'])
@section('content_admin')
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Quản lý phim</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/movie/create') }}" class="btn btn-success btn-sm" title="Add New Movie">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($movies as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ strlen($item->name ) > 30 ? substr($item->name,0,30) . '...' : $item->name}}</td>
                                        <td >{{strlen($item->description) > 30 ? substr($item->description,0,30) . '...' : $item->description}}</td>
                                        <td>{{ strlen($item->image) > 30 ? substr($item->image,0,30) . '...' : $item -> image }}</td>
  
                                        <td>
                                            <a href="{{ url('/movie/' . $item->id) }}" title="View Movie"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/movie/' . $item->id . '/edit') }}" title="Edit Episode"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/movie' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Movie" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                   
                </div>
                <div class="d-flex justify-content-center">
    {{$movies->appends(request()->all())-> links()}}
</div>
            </div>
          
    </div>
 
@endsection