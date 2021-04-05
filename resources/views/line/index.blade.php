@extends('layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Line
                    <small>List</small>
                    <a href="{{ route('line.create') }}" class="btn btn-success" style="float: right">Add new</a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Floor</th>
{{--                        <th>Edit</th>--}}
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($lines as $item)
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->desc}}</td>
                        <td>
                            @foreach($item->nodes as $item_node)
                                {{ $item_node->id }} <br>
                            @endforeach
                        </td>
{{--                        <td class="center"><a href="{{ route('line.edit', $item->id) }}"><i class="fa fa-pencil fa-fw"></i> </a></td>--}}
                        <td class="center"> <a href="{{ route('line.delete', $item->id) }}"><i class="fa fa-trash-o  fa-fw"></i> </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
