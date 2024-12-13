@extends('admin.layouts._app')

@section("content")

<div class="content-wrapper pt-3"> <!-- Added padding-top to create space -->
    <section class="content-header">
    
        <div class="container-fluid">
            
            <div class="row mb-2 align-items-center">
                <div class="col-md-12">
                    {{-- Prominent Add New Admin Button --}}
                    <div class="mb-3 text-end">
                        <a href="{{ url('admin/category/add')}}" class="btn btn-primary btn-lg">
                             Add New Category
                        </a>
                    </div>

                    @include('message')

                    {{-- Search Card --}}
                    <div class="card">
                        
                        <form action="" method="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                      <label>Category Name</label>
                                      <input type="text" class="form-control" value="{{Request::get('name')}}" name="name" placeholder="search by class name">
                                    </div>
                                    
                                    <div class="form-group col-md-3">
                                        <a href=""><button class="btn btn-primary" type="submit" style="margin-top: 25px;">Search</button></a>
                                        <a href="{{ url('admin/category/list') }}" class="btn btn-success"  style="margin-top: 25px;">Reset</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                   
                    <h1>Category List</h1>

                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Registered Date</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($getRecord as $value)

                                <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->category_name}}</td>
                                
                                <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>

                                <td>
                                    <a href="{{ url('admin/category/edit/'.$value->id) }}" class="btn btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="{{ url('admin/category/delete/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                        {{-- Pagination Links --}}
                        <div>
                            {!! $getRecord->appends(request()->except('page'))->links() !!}
                        </div>
                        <div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
