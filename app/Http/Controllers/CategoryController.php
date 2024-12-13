<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd("Yooo");
        $data['getRecord'] = CategoryModel::getCategory();
        $data['meta_title'] = 'category_list';
        return view('admin.category.list',$data);    
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // dd("YOOO");

       $data['meta_title'] = 'create_category';

       return view('admin.category.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
