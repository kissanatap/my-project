@extends('layouts.app')

@section('title', 'E-document Table List')

@section('page', 'Table List')

@section('content') 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="float-left">E-document</h5><a href="{{ route('edocuments.create') }}" class="btn btn-success btn-sm float-right"><i class="fa fa-plus"></i> Create</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <tr>
                                <th>No</th>  
                                <th>Edms ID</th>
                                <th>Title</th>
                                <th>Detail</th>
                                <th>Image File</th>
                                <th>Type Doc</th>
                                <th>Created By</th>  
                                <th>Created At</th>
                                <th>Action</th>
                            </tr> 
                            @foreach ($edocuments as $edoc)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $edoc->number }}</td>
                                    <td>{{ $edoc->title }}</td>
                                    <td>{{ $edoc->detail }}</td>
                                    <td><a href="{{ URL::to('/') }}/images/{{ $edoc->image }}" target="_blank">{{ $edoc->image }}</a></td>
                                    <td>{{ $edoc->typedocs->name }}</td>
                                    <td>{{ $edoc->created_by }}</td>
                                    <td>{{ $edoc->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <form action="{{ route('edocuments.destroy', $edoc->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('edocuments.edit', $edoc->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach   
                        </table>  
                        {!! $edocuments->render() !!}  
                    </div>    
                </div>
            </div>
        </div>   
@endsection

@section('footer')
    @if (session()->has('success'))
        <script>
            swal({
                title: "<?php echo session()->get('success'); ?>",
                timer: 5000,
                icon: 'success'
            });
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            swal({
                title: "<?php echo session()->get('error'); ?>",
                timer: 5000,
                icon: 'error'
            });
        </script>
    @endif
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
@stop