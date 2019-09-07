@extends('layouts.app')

@section('title', 'Edms Type List')
    
@section('page', 'Edms Type')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="float-left">Table List</h5><a href="{{ route('typedoc.create') }}" class="btn btn-success btn-sm float-right"><i class="fa fa-plus"> Create</i></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Type Name</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                                @foreach ($typedocs as $typedoc)
                                <tr>
                                    <td>{{ $typedoc->id }}</td>
                                    <td>{{ $typedoc->name }}</td>
                                    <td>{{ $typedoc->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="">view</a>
                                        <a href="">update</a>
                                        <a href="">remove</a>
                                    </td>
                                </tr>    
                                @endforeach
                        </table>
                        {!! $typedocs->render() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection