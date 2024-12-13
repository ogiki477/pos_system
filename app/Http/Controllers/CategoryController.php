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
       // dd($request->all());

       $data = new CategoryModel();

       $data->category_name = trim($request->category_name);

       $data->save();

       return redirect('admin/category/list')->with('success','The Category has been added Successfully');
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
        $data['getRecord'] = CategoryModel::find($id);

        $data['meta_title'] = 'edit_category';

        return view('admin/category/edit',$data);

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd("Yooo");

        $data = CategoryModel::find($id);

        $data->category_name = trim($request->category_name);

        $data->save();

        return redirect('admin/category/list')->with('success',"The Category has been Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
