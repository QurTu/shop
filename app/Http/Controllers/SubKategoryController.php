<?php

namespace App\Http\Controllers;

use App\SubKategory;
use App\Kategory;
use Illuminate\Http\Request;

class SubKategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories = SubKategory::all();
        $categories = Kategory::all();
        return view('admin.subCategory.subCategory',  compact('categories', 'subCategories'));
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
        $subkategory = new SubKategory();
        $subkategory->name = $request->name;
        $subkategory->category_id  = $request->category_id;
        $subkategory->save();
        return redirect()->back()->with('success', ' succesfully added');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\SubKategory  $subKategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubKategory $subKategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubKategory  $subKategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubKategory $subKategory)
    {
        {
            $categories = Kategory::all();
            return view('.admin.subCategory.edit' , compact('subKategory', 'categories'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubKategory  $subKategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubKategory $subKategory)
    {
        {
            $subKategory->name = $request->name;
            $subKategory->category_id = $request->category_id;
            $subKategory->save();
            return redirect()->route('subcategory');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubKategory  $subKategory
     * @return \Illuminate\Http\Response
     */
    public function delete(SubKategory $subKategory)
    {
        $subKategory->delete();
        return redirect()->route('subcategory');
    }
}
