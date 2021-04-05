<?php

namespace App\Http\Controllers;

use App\Models\Node;
use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointController extends Controller
{
    public function index(){
        $point = Point::orderBy('id', 'asc')->paginate(100);
        return view('point.index', compact('point'));
    }

    public function create(){
        $nodes = Node::all();
        return view('point.create', compact('nodes'));
    }

    public function store(Request $request){
        Point::create($request->all());
        return redirect()->route('point.create')->with('success', 'Thêm Point thành công!');
    }

    public function edit($id){
        $nodes = Node::all();
        $point = Point::find($id);
        return view('point.edit', compact('nodes', 'point'));
    }

    public function update(Request $request, $id){
//        $point = Point::find($id);
//        $point->update($request->all());
        DB::table('points')->where('id', $id)->update([
            'name' => $request->name,
            'long' => $request->long,
            'lat' => $request->lat,
            'z' => $request->z,
            'node_id' => $request->node_id,
        ]);
        return redirect()->route('point.create')->with('success', 'Sửa Point thành công!');
    }

    public function delete($id){
        Point::find($id)->delete();
        return redirect()->route('point.index')->with('success', 'Xóa Point thành công');
    }
}
