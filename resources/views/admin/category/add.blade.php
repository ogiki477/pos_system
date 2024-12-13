@extends('admin.layouts._app')

@section("content")

<div class="content-wrapper pt-3">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 align-items-center">
                <div class="col-sm-16">
                    <h1>Add New Class</h1>

                        <div class="card card-primary card-outline mb-4"> 
                            
                            <form action="{{ url('admin/category/add')}}" method="post"> 
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="mb-3"> 
                                        <label  class="form-label">Category Name <span style="color: red">*</span></label> 
                                        <input type="text" name="category_name"  class="form-control" placeholder="Enter category name" required>
                                    </div>
                                   
                                <div class="card-footer"> 
                                    <button type="submit" class="btn btn-primary">Submit</button> 
                                </div> 
                            </form>   
                        </div>
            
                </div>         
    </section>
</div>

@endsection
