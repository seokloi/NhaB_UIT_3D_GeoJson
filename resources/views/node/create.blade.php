@extends('layout.index')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Node
                    <small>Create</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <form action="{{ route('node.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Id *</label>
                        <input class="form-control" name="id" required/>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="desc"/>
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <select name="body_id" class="form-control" >
                            <option value="null">Null</option>
                            @foreach($body as $item)
                                <option value="{{ $item->id }}">{{ $item->id}} - {{ $item->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Innerface</label>
                        <select name="innerface_id" class="form-control" >
                            <option value="null">Null</option>
                            @foreach($innerfaces as $item)
                                <option value="{{ $item->id }}">{{ $item->id}} - {{ $item->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Seq Innerface</label>
                        <input type="number" class="form-control" name="seq_inner"/>
                    </div>
                    <div class="form-group">
                        <label>Seq Face</label>
                        <input type="number" class="form-control" name="seq_face"/>
                    </div>
                    <div class="form-group">
                        <label>Seq Line</label>
                        <input type="number" class="form-control" name="seq_line"/>
                    </div>
                    <button type="submit" class="btn btn-default">Create</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection
