@extends('layout.index')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Innerface
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
                <form action="{{ route('innerface.update', $innerface->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Id *</label>
                        <input class="form-control" value="{{ $innerface->id }}" name="id" required/>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{ $innerface->name ?? '' }}" name="name"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" value="{{ $innerface->desc ?? '' }}" name="desc"/>
                    </div>
                    <div class="form-group">
                        <label>Face *</label>
                        <select name="face_id" class="form-control" required>
                            @foreach($faces as $item)
                                <option @if($item->id == $innerface->face_id) selected @endif value="{{ $item->id }}">{{ $item->id}} - {{ $item->name ?? '' }}</option>
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
