<?php

namespace App\Http\Controllers;

use App\Models\Body;
use App\Models\Floor;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function index(){
        $body = Body::all()->sortByDesc('created_at');
        return view('body.index', compact('body'));
    }

    public function create(){
        $floor = Floor::all();

        return view('body.create', compact('floor'));
    }

    public function store(Request $request){
        Body::create($request->all());
        return redirect()->route('body.create')->with('success', 'Thêm Body thành công!');
    }

    public function edit($id){
        $body = Body::find($id);
        $floor = Floor::all();
        return view('body.edit', compact('body', 'floor'));
    }

    public function update(Request $request, $id){
        $body = Body::find($id);
        $body->update($request->all());

        return redirect()->route('body.create')->with('success', 'Sửa Body thành công!');
    }

    public function delete($id){
        Body::find($id)->delete();
        return redirect()->route('body.index')->with('success', 'Xóa Body thành công');
    }

}
