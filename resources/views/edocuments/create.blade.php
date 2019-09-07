@extends('layouts.app')

@section('title', 'E-document Create')

@section('page', 'Create New')

@section('content')
<div class="row">
        <div class="col-md-12">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h5>E-document</h5>
            </div>
                <div class="card-body">
                    <form action="{{ route('edocuments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Code</label>
                            <input type="text" class="form-control" value="{{ $number }}" name="number" readonly required>
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" placeholder="Enter your Title..." name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="">Detail</label>
                            <textarea name="detail" id="" cols="30" rows="5" class="form-control" placeholder="Enter your Detail..." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">File</label><br>
                            <input type="file" name="image" required>
                        </div>
                        <div class="form-group">
                            <label for="">Type</label>
                            <select name="type_id" class="form-control" placeholder="Please Select..." required>
                                @foreach ($typedocs as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="created_by" class="form-control" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="{{ route('edocuments.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>       
@endsection