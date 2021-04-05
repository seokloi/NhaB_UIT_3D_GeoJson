@extends('layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Node
                    <small>List</small>
                    <a href="{{ route('node.create') }}" class="btn btn-success" style="float: right">Add new</a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
            <table class="table table-striped table-bordered table-hover" >
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Body</th>
                        <th>Innerface</th>
                        <th>Seq Innerface</th>
                        <th>Seq Face</th>
                        <th>Seq Line</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($nodes as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->body ? $item->body->id : '' }}</td>
                        <td>{{$item->innerface ? $item->innerface->id : '' }}</td>
                        <td>{{$item->seq_inner }}</td>
                        <td>{{$item->seq_face }}</td>
                        <td>{{$item->seq_line }}</td>
                        <td class="center"><a href="{{ route('node.edit', $item->id) }}"><i class="fa fa-pencil fa-fw"></i> </a></td>
                        <td class="center"> <a href="{{ route('node.delete', $item->id) }}"><i class="fa fa-trash-o  fa-fw"></i> </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                {!! $nodes->links() !!}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
