<?php

namespace App\Http\Controllers;

use App\Models\CarDetail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminAddCarDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'companyname' => 'required',
            // 'file' => 'required|mimes:png,jpg,jpeg|max:2048',
            'file' => 'required',
            'title' => 'required',
            'price' => 'required',
            'kilometer' => 'required',
            'type' => 'required',
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        };

        // if($request->hasFile('file')){
            $carAdd = new CarDetail;

            $carAdd->companyname = $request->companyname;
            $file = $request->file('file');
            $filename = time().'_'.$file->getClientOriginalName();
            $location = 'storage/imagesupload';
            $file->move($location, $filename);

            // $filepath = url('files'.$filename);
            $carAdd->path = $request->file;
            $carAdd->title = $request->title;
            $carAdd->price = $request->price;
            $carAdd->Kilometer = $request->kilometer;
            $carAdd->type = $request->type;
            $carAdd->model = $request->modal;
            $carAdd->review = $request->review;
            // dd($carAdd);

            $carAdd->save();
            return redirect('/admin')->with('status', 'Upload successfully');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
