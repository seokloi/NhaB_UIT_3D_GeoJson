<?php

namespace App\Http\Controllers;

use App\Models\Line;
use App\Models\LineNode;
use App\Models\Node;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LineController extends Controller
{
    public function index(){
        $lines = Line::all()->sortByDesc('created_at');
        return view('line.index', compact('lines'));
    }

    public function create(){
        $nodes = Node::all();
        return view('line.create', compact('nodes'));
    }

    public function store(Request $request){
        $line = Line::create($request->all());
        foreach ($request->node_id as $key => $node_id){
            LineNode::create([
                'face_id' => $line->id,
                'node_id' => $node_id,
                'seq' => $request->seq[$key]
            ]);
        }

        return redirect()->route('line.create')->with('success', 'Thêm Line thành công!');
    }

    public function edit($id){
        $nodes = Node::all();
        $line = Line::find($id);
        return view('line.edit', compact('line', 'nodes'));
    }

    public function update(Request $request, $id){
        $line = Line::find($id);
        $line->update($request->all());
        $line->nodes->sync($request->node_id);
        return redirect()->route('line.create')->with('success', 'Sửa Line thành công!');
    }

    public function delete($id){
        Line::find($id)->delete();
        $linenode = LineNode::where('line_id', $id)->get();
        foreach ($linenode as $item){
            $item->delete();
        }
        return redirect()->route('line.index')->with('success', 'Xóa Line thành công');
    }
}
