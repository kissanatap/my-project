@extends('layouts.app')

@section('title', 'E-Document Update')

@section('page', 'Update')

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
                    <form action="{{ route('edocuments.update', $edocument->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Code</label>
                            <input type="text" class="form-control" name="number" value="{{ $edocument->number }}" readonly required>
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" value="{{ $edocument->title }}" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="">Detail</label>
                            <textarea name="detail" id="" cols="30" rows="5" class="form-control" required>{{ $edocument->detail }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">File</label><br>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <label for="">Type</label>
                            <select name="type_id" class="form-control" required>
                                @foreach ($typedocs as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $edocument->type_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="hidden_image" value="{{ $edocument->image }}" readonly>
                        </div>
                        <div class="form-group">
                    
                            <input type="hidden" name="created_by" class="form-control" value="{{ $edocument->created_by }}" readonly>
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