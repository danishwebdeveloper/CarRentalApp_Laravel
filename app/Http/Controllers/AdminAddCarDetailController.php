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
        $cardetails = CarDetail::latest()->paginate(5);
        return view('Admin.index', compact('cardetails'));
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
            'file' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
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
            $filename = time().'.'. $file->getClientOriginalName();
            $location = 'storage/imagesupload';
            $file->move($location, $filename);
            // $file = url('files')
            $carAdd->path = $filename;
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
        // return ('agyaa idar');
        $Autos = CarDetail::findorFail($id);
        return view('Admin.show', compact('Autos'));
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
