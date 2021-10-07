<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;

class data_controller extends Controller
{
    public function index(){
        $data_web = data::all();
        return view('admin.index',compact('data_web'));
    }

   
    public function inputdata(Request $request){
        data::create($request->all());
        return redirect('data')->with('sukses','Data telah ditambahkan');
    }

    public function editdata(){
        $data_web = data::find($id);
        $data_web->name = $request->input('name');
        $data_web->service = $request->input('service');
        $data_web->email = $request->input('email');
        $data_web->whatsapp = $request->input('whatsapp');
        $data_web->kebutuhan = $request->input('kebutuhan');
        $data_web->status = $request->input('status');
    }

    public function findiddata(){
        $data_web = data::find($id);
        $data = [
            'title' => 'data',
            'data_web' => $data_web
        ];
    }

    public function vdataweb($id){
        $data_web = data::find($id);
        $data = [
            'title'=>'data',
            'data_web'=>$data_web
        ];
        return view('admin.validasi',$data);
    }

    public function viewdataweb($id,Request $request){
        $data_web = data::find($id);
        $data_web->name = $request->input('name');
        $data_web->service = $request->input('service');
        $data_web->email = $request->input('email');
        $data_web->whatsapp = $request->input('whatsapp');
        $data_web->kebutuhan = $request->input('kebutuhan');
        $data_web->status = $request->input('status');
        $data_web->save();
        return view('admin.index', compact('data_web'));
    }

    public function filterdata(){
        $data_web = data::where('status','diterima')->get();
        //dd($data_web);
        return view('admin.filter',compact('data_web'));
    }
}
