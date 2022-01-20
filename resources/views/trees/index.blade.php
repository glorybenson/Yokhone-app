@extends('layouts.app')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left">Trees</h4>
                    <div class="text-right">
                        <a href="{{ route('create.tree') }}" class="btn btn-success p-2">Add New Tree</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-striped border-0 data-table" id="datatable">
                            <thead class="thead-light">
                                <th>#</th>
                                <th>Farm Name</th>
                                <th>Description</th>
                                <th>Reason</th>
                                <th>Quality</th>
                                <th>Date Planted</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @if(isset($trees))
                                @foreach($trees as $tree)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{$tree->farm->farm_name}}</td>
                                    <td>{{$tree->desc}}</td>
                                    <td>{{$tree->reason}}</td>
                                    <td>{{$tree->quantity}}</td>
                                    <td>{{$tree->date_planted}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('edit.tree', $tree->id) }}" class="btn btn-sm p-2" title="Edit"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        @if(isset($users))
                        {!! $users->links("pagination::bootstrap-4") !!}
                        @endif
                    </div>
                    <!-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection