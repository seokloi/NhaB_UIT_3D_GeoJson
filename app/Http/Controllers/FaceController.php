<?php

namespace App\Http\Controllers;

use App\Models\Body;
use App\Models\Face;
use App\Models\FaceNode;
use App\Models\Node;
use App\Models\SurFace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaceController extends Controller
{
    public function index(){
        $face = Face::all()->sortByDesc('created_at');
        return view('face.index', compact('face'));
    }

    public function create(){
        $body = Body::all();
        $surface = SurFace::all();
        $nodes = Node::all();
        return view('face.create', compact('body', 'surface', 'nodes'));
    }

    public function store(Request $request){
        $face = Face::create($request->all());
        foreach ($request->node_id as $key => $node_id){
            FaceNode::create([
                'face_id' => $face->id,
                'node_id' => $node_id,
                'seq' => $request->seq[$key]
            ]);
        }

        return redirect()->route('face.create')->with('success', 'Thêm Face thành công!');
    }

    public function edit($id){
        $face = Face::find($id);
        $body = Body::all();
        $surface = SurFace::all();
        $nodes = Node::all();
        return view('face.edit', compact('face', 'body', 'surface', 'nodes'));
    }

    public function update(Request $request, $id){
        $face = Face::find($id);
        $face->update($request->all());
        $face->nodes->sync($request->node_id);
        return redirect()->route('face.create')->with('success', 'Sửa Face thành công!');
    }

    public function delete($id){
        Face::find($id)->delete();
        DB::table('face_node')->where('face_id', $id)->delete();
        return redirect()->route('face.index')->with('success', 'Xóa Face thành công');
    }
}
