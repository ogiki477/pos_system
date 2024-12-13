@extends('admin.layouts._app')

@section("content")

<div class="content-wrapper pt-3">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 align-items-center">
                <div class="col-sm-16">
                    <h1>Edit Category</h1>

                        <div class="card card-primary card-outline mb-4"> 
                            
                            <form action="{{ url('admin/category/edit/'.$getRecord->id)}}" method="post"> 
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="mb-3"> 
                                        <label  class="form-label">Category Name </label> 
                                        <input type="text" name="category_name" value="{{ $getRecord->category_name}}"  class="form-control">
                                    </div>
                                    
                                <div class="card-footer"> 
                                    <button type="submit" class="btn btn-primary">Update</button> 
                                </div> 
                            </form>   
                        </div>
            
                </div>         
    </section>
</div>

@endsection
