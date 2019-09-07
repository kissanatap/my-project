@extends('layouts.app')

@section('title', 'Edms Type Create')
    
@section('page', 'Edms Type Create')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('typedoc.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="EMDS Type Name..." required>
                            </div>
                            <div class="form-group float-right">
                                <a href="{{ route('typedoc.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection