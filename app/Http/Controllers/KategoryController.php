<?php

namespace App\Http\Controllers;

use App\Kategory;
use Illuminate\Http\Request;

class KategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Kategory::all();
        return view('admin.category.category',  ['categories' => $categories]);
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
    public function add(Request $request)
    {
        $kategory = new Kategory();
        $kategory->name = $request->name;
        $kategory->save();
        return redirect()->back()->with('success', ' succesfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategory  $kategory
     * @return \Illuminate\Http\Response
     */
    public function show(Kategory $kategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategory  $kategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategory $kategory)
    {
        return view('.admin.category.edit' , compact('kategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategory  $kategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategory $kategory)
    {
        $kategory->name = $request->name;
        $kategory->save();
        return redirect()->route('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategory  $kategory
     * @return \Illuminate\Http\Response
     */
    public function delete(Kategory $kategory)
    {
        $kategory->delete();
        return redirect()->route('category');
        
    }
}
