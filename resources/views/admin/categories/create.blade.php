@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="padding: 10px;">
                    <h2 class="card-title danger" style="display: inline-block;padding-top:10px;">Create Category</h3>
                    <a class="btn btn-sm float-right m-1" style="color:white;background:#d00cf2;" href="{{ route('admin.category.index') }}">back</a>
                    <a class="btn btn-sm btn-danger float-right m-1" href="{{url('/admin')}}">Dashboard</a>
                </div>
                <div class="card-body mt-3">
                    <form action="{{route('admin.category.store')}}" method="post" class="form" enctype="multipart/form-data" id="form">
                        @csrf
                        <div class="form-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <div class="position-relative has-icon-right">
                                                <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                                                <div class="form-control-position">
                                                    <i class="ft-tv danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" class="btn btn-md float-right" style="color:white;background:#833ae8;" value="Create">
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection