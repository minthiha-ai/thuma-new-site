@extends('admin.layout.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="padding: 10px;">
                <h2 class="card-title danger" style="display: inline-block;padding-top:10px;">Contents List</h3>
                <a class="btn btn-sm float-right m-1" style="color:white;background:#d00cf2;" href="{{ route('admin.content.create') }}">Create Contents</a>
                <a class="btn btn-sm btn-danger float-right m-1" href="{{url('/admin')}}">Dashboard</a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row match-height">
            @foreach($c as $e)
                <div class="col-lg-6 col-md-12 col-sm-12 item">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img">
                                <img class="card-img-top img-fluid height-300" src="{{asset('uploads/contents/photos/'.$e->photos)}}" alt="{{$e->title}}">
                            </div>
                            <div class="card-block mt-2">
                                <h4 class="card-title">{{$e->title}}</h4>
                                <div class="row">
                                    <div class="col-md-6"><span class="text-success">Category : </span>{{ $e->content_category->name }}</div>
                                    <div class="col-md-6 text-right"><span class="text-danger">Author : </span>{{$e->author}}</div>
                                    <div class="col-md-6"><span class="text-info">Date : </span>{{$e->date}}{{--\Illuminate\Support\Carbon::parse($e->created_at)->format("d F, Y")--}}</div>
                                </div>
                                <p class="card-text clearfix">{!! Str::limit($e->content,200) !!}</p>
                                <div class="float-right">
                                    <a href="{{Route('admin.content.edit',$e->id)}}">
                                        <button type="button" class="btn btn-sm" style="color:white;background:#833ae8;" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit Data">
                                            <i class="icon-pencil"></i>
                                        </button>
                                    </a>
                                    &nbsp
                                    <form action="{{route('admin.content.destroy',$e->id)}}" method="post" class="d-inline-block" onclick="return confirm('Are you sure?')">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-sm btn-danger " title="" data-toggle="tooltip" data-placement="top" data-original-title="Delete Data">
                                            <i class="icon-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-12 text-center">
            {{$c->links()}}
        </div>
    </div>
</div>
@endsection