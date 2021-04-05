@extends('layout.index')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Face
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
                <form action="{{ route('face.store') }}" method="POST">
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
                        <label>Body *</label>
                        <select name="body_id" class="form-control" required>
                            @foreach($body as $item_body)
                                <option value="{{ $item_body->id }}">{{ $item_body->id}} - {{ $item_body->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Surface</label>
                        <select name="surface_id" class="form-control" >
                            @foreach($surface as $item_surface)
                                <option value="{{ $item_surface->id }}">{{ $item_surface->id}} - {{ $item_surface->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" id="node">
                        <div>
                            <label>Node</label> <a class="btn btn-danger subnode"><i class="fa fa-minus" aria-hidden="true"></i></a>
                            <input class="form-control" type="text" name="node_id[]" placeholder="Node" required>
{{--                            <select name="node_id[]" class="form-control">--}}
{{--                                @foreach($nodes as $item)--}}
{{--                                    <option value="{{ $item->id }}">{{ $item->id}} - {{ $item->name ?? '' }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
                            <input class="form-control" type="number" name="seq[]" value="1" placeholder="Seq Node" required>
                        </div>
                    </div>

                    <div class="form-group" id="nodeitem">
                        <div>
                            <label>Node</label> <a class="btn btn-danger subnode"><i class="fa fa-minus" aria-hidden="true"></i></a>
                            <input class="form-control" type="text" name="node_id[]" placeholder="Node" required>
                            <input class="form-control" type="number" name="seq[]" value="2" placeholder="Seq Node" required>
                        </div>
                        <div>
                            <label>Node</label> <a class="btn btn-danger subnode"><i class="fa fa-minus" aria-hidden="true"></i></a>
                            <input class="form-control" type="text" name="node_id[]" placeholder="Node" required>
                            <input class="form-control" type="number" name="seq[]" value="3" placeholder="Seq Node" required>
                        </div>
                        <div>
                            <label>Node</label> <a class="btn btn-danger subnode"><i class="fa fa-minus" aria-hidden="true"></i></a>
                            <input class="form-control" type="text" name="node_id[]" placeholder="Node" required>
                            <input class="form-control" type="number" name="seq[]" value="4" placeholder="Seq Node" required>
                        </div>
                        <div>
                            <label>Node</label> <a class="btn btn-danger subnode"><i class="fa fa-minus" aria-hidden="true"></i></a>
                            <input class="form-control" type="text" name="node_id[]" placeholder="Node" required>
                            <input class="form-control" type="number" name="seq[]" value="5" placeholder="Seq Node" required>
                        </div>
                        <div>
                            <label>Node</label> <a class="btn btn-danger subnode"><i class="fa fa-minus" aria-hidden="true"></i></a>
                            <input class="form-control" type="text" name="node_id[]" placeholder="Node" required>
                            <input class="form-control" type="number" name="seq[]" value="6" placeholder="Seq Node" required>
                        </div>
                    </div>
                    <button id="addnode" class="btn btn-info">Add node</button>
                    <br> <br>
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection

@section('script')
    <script>
        $('#addnode').click(function(e){
            e.preventDefault();
            let child = $('#node').html();
            $('#nodeitem').append(child);
        })

        $(document).on('click', '.subnode', function (){
            let parent = $(this).parent();

            console.log(parent);
            parent.remove();
        })
    </script>
@endsection


