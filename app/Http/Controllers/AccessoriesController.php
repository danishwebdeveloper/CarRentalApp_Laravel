<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use App\Models\CarDetail;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bestcardetail = CarDetail::all();
        // return view('Home.Bestaccessoriesdetail', compact('bestcardetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function show(Accessories $accessories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessories $accessories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessories $accessories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessories $accessories)
    {
        //
    }
}
