@extends('layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Point
                    <small>List</small>
                    <a href="{{ route('point.create') }}" class="btn btn-success" style="float: right">Add new</a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Long</th>
                        <th>Lat</th>
                        <th>High</th>
                        <th>Node</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($point as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->long}}</td>
                        <td>{{$item->lat}}</td>
                        <td>{{ $item->z }}</td>
                        <td>{{$item->node->id}}</td>
                        <td class="center"><a href="{{ route('point.edit', $item->id) }}"><i class="fa fa-pencil fa-fw"></i> </a></td>
                        <td class="center"> <a href="{{ route('point.delete', $item->id) }}"><i class="fa fa-trash-o  fa-fw"></i> </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                {!! $point->links() !!}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
