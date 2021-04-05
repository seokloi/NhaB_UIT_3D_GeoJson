<?php

namespace App\Http\Controllers;

use App\Models\Body;
use App\Models\InnerFace;
use App\Models\Node;
use Illuminate\Http\Request;

class NodeController extends Controller
{
    public function index(){
        $nodes = Node::orderBy('id', 'asc')->paginate(100);
        return view('node.index', compact('nodes'));
    }

    public function create(){
        $body = Body::all();
        $innerfaces = InnerFace::all();
        return view('node.create', compact('body', 'innerfaces'));
    }

    public function store(Request $request){
        Node::create($request->all());
        return redirect()->route('node.create')->with('success', 'Thêm Node thành công!');
    }

    public function edit($id){
        $node = Node::find($id);
        $body = Body::all();
        $innerfaces = InnerFace::all();
        return view('node.edit', compact('node', 'body', 'innerfaces'));
    }

    public function update(Request $request, $id){
        $node = Node::find($id);
        $node->update($request->all());

        return redirect()->route('node.create')->with('success', 'Sửa Node thành công!');
    }

    public function delete($id){
        Node::find($id)->delete();
        return redirect()->route('node.index')->with('success', 'Xóa Node thành công');
    }
}
