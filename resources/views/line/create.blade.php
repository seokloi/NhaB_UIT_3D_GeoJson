@extends('layout.index')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Line
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
                <form action="{{ route('line.store') }}" method="POST">
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
                    <div class="form-group" id="line">
                        <div>
                            <label>Node *</label> <a class="btn btn-danger subnode"><i class="fa fa-minus" aria-hidden="true"></i></a>
                            <select name="node_id[]" class="form-control" required>
                                @foreach($nodes as $item)
                                    <option value="{{ $item->id }}">{{ $item->id}} - {{ $item->name ?? '' }}</option>
                                @endforeach
                            </select>
                            <input class="form-control" type="number" name="seq[]" placeholder="Seq Node" required>
                        </div>
                    </div>
                    <div class="form-group" id="lineitem">

                    </div>
                    <button id="add" class="btn btn-info">Add node</button>
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

@section('script')
    <script>
        $('#add').click(function(e){
            e.preventDefault();
            let child = $('#line').html();
            $('#lineitem').append(child);
        })

        $(document).on('click', '.subnode', function (){
            let parent = $(this).parent();

            console.log(parent);
            parent.remove();
        })
    </script>
@endsection

