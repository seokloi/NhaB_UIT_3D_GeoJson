<?php

namespace App\Http\Controllers;

use App\Models\SurFace;
use Illuminate\Http\Request;

class SurFaceController extends Controller
{
    public function index(){
        $surface = SurFace::all()->sortByDesc('created_at');
        return view('surface.index', compact('surface'));
    }

    public function create(){
        return view('surface.create');
    }

    public function store(Request $request){
        SurFace::create($request->all());
        return redirect()->route('surface.create')->with('success', 'Thêm SurFace thành công!');
    }

    public function edit($id){
        $surface = SurFace::find($id);
        return view('surface.edit');
    }

    public function update(Request $request, $id){
        $surface = SurFace::find($id);
        $surface->update($request->all());

        return redirect()->route('surface.create')->with('success', 'Sửa SurFace thành công!');
    }

    public function delete($id){
        SurFace::find($id)->delete();
        return redirect()->route('surface.index')->with('success', 'Xóa SurFace thành công');
    }
}
