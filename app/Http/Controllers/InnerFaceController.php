<?php

namespace App\Http\Controllers;

use App\Models\Face;
use App\Models\InnerFace;
use App\Models\Node;
use Illuminate\Http\Request;

class InnerFaceController extends Controller
{
    public function index(){
        $innerfaces = InnerFace::all()->sortByDesc('created_at');
        return view('innerface.index', compact('innerfaces'));
    }

    public function create(){
        $faces = Face::all();
        $nodes = Node::all();
        return view('innerface.create', compact('faces', 'nodes'));
    }

    public function store(Request $request){
        $inner = InnerFace::create($request->all());
        foreach ($request->node_id as $key => $node_id){
            $node = Node::find($node_id);
            $node->seq_inner = $request->seq[$key];
            $node->innerface_id = $inner->id;
            $node->save();
        }
        return redirect()->route('innerface.create')->with('success', 'Thêm InnerFace thành công!');
    }

    public function edit($id){
        $faces = Face::all();
        $innerface = InnerFace::find($id);
        return view('innerface.edit', compact('faces', 'innerface'));
    }

    public function update(Request $request, $id){
        $innerface = InnerFace::find($id);
        $innerface->update($request->all());

        return redirect()->route('innerface.create')->with('success', 'Sửa InnerFace thành công!');
    }

    public function delete($id){
        InnerFace::find($id)->delete();
        return redirect()->route('innerface.index')->with('success', 'Xóa InnerFace thành công');
    }
}
