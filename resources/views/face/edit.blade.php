@extends('layout.index')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Face
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <form action="{{ route('face.update', $face->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Id *</label>
                        <input class="form-control" value="{{ $face->id }}" name="id" required/>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{ $face->name }}" name="name"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" value="{{ $face->desc }}" name="desc"/>
                    </div>
                    <div class="form-group">
                        <label>Body *</label>
                        <select name="body_id" class="form-control" required>
                            @foreach($body as $item_body)
                                <option @if($item_body->id == $face->body_id) selected @endif value="{{ $item_body->id }}">{{ $item_body->id}} - {{ $item_body->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Surface</label>
                        <select name="surface_id" class="form-control">
                            @foreach($surface as $item_surface)
                                <option @if($item_surface->id == $face->body_id) selected @endif value="{{ $item_surface->id }}">{{ $item_surface->id}} - {{ $item_surface->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" id="node">
                        <label>Node</label>
                        <select name="node_id[]" class="form-control">
                            @foreach($nodes as $item)
                                <option value="{{ $item->id }}">{{ $item->id}} - {{ $item->name ?? '' }}</option>
                            @endforeach
                        </select>
                        <input class="form-control" type="number" name="seq[]" placeholder="Seq Node">
                    </div>
                    <div class="form-group" id="nodeitem">

                    </div>
                    <button id="addnode" class="btn btn-info">Add node</button>
                    <br> <br>
                    <button type="submit" class="btn btn-default">Create</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection
