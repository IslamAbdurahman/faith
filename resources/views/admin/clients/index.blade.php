@extends('layouts.main')

@section('main-content')


    <!-- /.card -->

    <div class="card">
        <div class="card-header">
            <ul class="navbar list-unstyled m-0 p-0">
                <li>
                    <h3 class="card-title">Sciences</h3>
                </li>
                <li>

                    <!-- SEARCH FORM -->
                    <form action="{{ route('clients.index') }}" method="get" class="form-inline m-0 ml-md-3">
                        @csrf
                        <div class="input-group input-group-sm">
                            <select name="per_page" id="" class="form-control form-control-navbar">
                                <option {{ $per_page == 10 ? 'selected':'' }} value="10">10</option>
                                <option {{ $per_page == 20 ? 'selected':'' }}  value="20">20</option>
                                <option {{ $per_page == 50 ? 'selected':'' }}  value="50">50</option>
                                <option {{ $per_page == 100 ? 'selected':'' }}  value="100">100</option>
                            </select>
                                <input name="search" value="{{ $search }}" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-0 table-responsive">
            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                    <th class="py-1">N</th>
                    <th class="py-1">Name</th>
                    <th class="py-1">Phone</th>
                    <th class="py-1">URL</th>
                    <th class="py-1">Date</th>
                    <th class="py-1">Limit</th>
                    <th class="py-1">
                        @if(Auth::user()->role == 1 || Auth::user()->role == 2)
                        <button type="button" class="btn btn-success my-0 py-0 px-1" data-toggle="modal" data-target="#admin_add">
                            <i class="fas fa-calendar-plus m-0 p-0"></i>
                        </button>
                        <div class="modal fade" id="admin_add">
                            <div class="modal-dialog">
                                <div class="modal-content bg-success">
                                    <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">

                                        <div class="modal-header">
                                            <h4 class="modal-title">Add Client</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input name="name" type="text" class="form-control" value="" id="exampleInputEmail1" placeholder="Type name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Phone</label>
                                                    <input name="phone" type="number" class="form-control" value="" id="exampleInputEmail1" placeholder="Type phone">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">URL</label>
                                                    <input name="url" type="text" class="form-control" value="" id="exampleInputEmail1" placeholder="Type url">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Date</label>
                                                    <input name="date" type="date" class="form-control" value="" id="exampleInputEmail1" placeholder="Type date">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Limit</label>
                                                    <input name="limit" type="number" class="form-control" value="" id="exampleInputEmail1" placeholder="Type limit">
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                    <label class="form-check-label" for="exampleCheck1">Checking</label>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-outline-light">Save</button>
                                        </div>

                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        @else
                            Action
                        @endif

                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                <tr>
                    <td class="py-1">
                        {{($clients->currentpage()-1)*$clients->perpage()+($loop->index+1)}}
                    </td>
                    <td class="py-1">{{ $client->name }}</td>
                    <td class="py-1">{{ $client->phone }}</td>
                    <td class="py-1">{{ $client->url }}</td>
                    <td class="py-1">{{ date('Y-m-d', strtotime($client->date)) }}</td>
                    <td class="py-1">{{ $client->limit }}</td>
                    <td class="py-1">


                        @if( Auth::user()->role == 1 || Auth::user()->role == 2)
                            <button type="button" class="btn btn-info my-0 py-0 px-1" data-toggle="modal" data-target="#modal{{ $loop->index+1 }}">
                                <i class="fas fa-edit m-0 p-0"></i>
                            </button>
                            <div class="modal fade" id="modal{{ $loop->index+1 }}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-primary">
                                        <form action="{{ route('clients.update', $client->id) }}" method="post" enctype="multipart/form-data">

                                            <div class="modal-header">
                                                <h4 class="modal-title">Update client</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                @csrf
                                                @method('PUT')
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input name="name" type="text" class="form-control" value="{{ $client->name }}" id="exampleInputEmail1" placeholder="Type name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Phone</label>
                                                        <input name="phone" type="number" class="form-control" value="{{ $client->phone }}" id="exampleInputEmail1" placeholder="Type phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">URL</label>
                                                        <input name="url" type="text" class="form-control" value="{{ $client->url }}" id="exampleInputEmail1" placeholder="Type url">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Date</label>
                                                        <input name="date" type="date" class="form-control" value="{{ date('Y-m-d', strtotime($client->date)) }}" id="exampleInputEmail1" placeholder="Type date">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Limit</label>
                                                        <input name="limit" type="number" class="form-control" value="{{ $client->limit }}" id="exampleInputEmail1" placeholder="Type date">
                                                    </div>

                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                        <label class="form-check-label" for="exampleCheck1">Checking</label>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-outline-light">Save</button>
                                            </div>

                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->


                            <button type="button" class="btn btn-danger my-0 py-0 px-1" data-toggle="modal" data-target="#modal-danger{{ $client->id }}">
                                <i class="fas fa-trash m-0 p-0"></i>
                            </button>

                            <div class="modal fade" id="modal-danger{{ $client->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-danger">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure?</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                <form class="d-inline" action="{{ route('clients.destroy',$client->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-light">
                                                        Delete
                                                    </button>
                                                </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->


                            @endif

                    </td>
                </tr>

                @endforeach


                </tbody>
            </table>
            <div>{{ $clients->appends($_GET)->links() }}</div>
        </div>
        <!-- /.card-body -->
@endsection
