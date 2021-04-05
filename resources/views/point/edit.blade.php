@extends('layout.index')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Point
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
                <form action="{{ route('point.update', $point->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Id *</label>
                        <input class="form-control" value="{{ $point->id }}" name="id" required/>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{ $point->name ?? '' }}" name="name"/>
                    </div>
                    <div class="form-group">
                        <label>Long</label>
                        <input type="text" class="form-control" value="{{ $point->long ?? '' }}" name="long"/>
                    </div>
                    <div class="form-group">
                        <label>Lat</label>
                        <input type="text" class="form-control" value="{{ $point->lat ?? '' }}" name="lat"/>
                    </div>
                    <div class="form-group">
                        <label>High</label>
                        <input type="text" class="form-control" value="{{ $point->z ?? '' }}" name="z"/>
                    </div>
                    <div class="form-group">
                        <label>Node *</label>
                        <select name="node_id" class="form-control" required>
                            @foreach($nodes as $item)
                                <option @if($item->id == $point->node_id) selected @endif value="{{ $item->id }}">{{ $item->id}} - {{ $item->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Update</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection
