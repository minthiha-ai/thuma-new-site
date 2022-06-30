@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="padding: 10px;">
                    <h2 class="card-title danger" style="display: inline-block;padding-top:10px;">Category List</h3>
                    <a class="btn btn-sm float-right m-1" style="color:white;background:#d00cf2;" href="{{ route('admin.category.create') }}">Create Category</a>
                    <a class="btn btn-sm btn-danger float-right m-1" href="{{url('/admin')}}">Dashboard</a>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                        <table class="table table-striped table-bordered file-export">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 0;@endphp
                            @foreach($c as $e)
                                @php $i++;@endphp
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td>{{$e->name}}</td>
                                    <td>
                                        <a href="{{route('admin.category.edit',$e->id)}}">
                                            <button type="button" class="btn btn-sm btn-primary" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit Data">
                                                <i class="ft-edit"></i>
                                            </button>
                                        </a>
                                        <form action="{{route('admin.category.destroy',$e->id)}}" method="post" class="d-inline-block" onclick="return confirm('All contents under this category will be deleted too! Are you sure?')">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-sm btn-danger " title="" data-toggle="tooltip" data-placement="top" data-original-title="Delete Data">
                                                <i class="ft-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Option</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection