@extends('admin.layout.master')

@section('style')
    <style>
        .card-img-top {
            width:180px;
            height:200px;
            position: absolute;
            top: -100px;
            align-self: center;
            margin-left: -30px;
            border: 1px solid #f6f7fa;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="padding: 10px;">
                <h2 class="card-title" style="display: inline-block;padding-top:10px;color:#833ae8;">Members' Profiles</h3>
                <a class="btn btn-sm float-right m-1" style="color:white;background:#833ae8;" href="{{ route('admin.member.create') }}">Add Member</a>
                <a class="btn btn-sm btn-danger float-right m-1" href="{{url('/admin')}}">Dashboard</a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row match-height">
            @foreach ($m as $e)
              <div class="col-md-4" style="padding-top: 70px;">
                  <div class="card" style="margin-top:30px; ">
                    <img class="card-img-top img img-fluid rounded-circle mx-auto d-block" src="{{asset('uploads/members/photos/'.$e->photo)}}" alt="{{$e->name}}">
                    <div class="card-block">
                        <div class="card-block height-100"></div>
                        <h6 class="text-muted text-center">{{ $e->position }}</h4>
                        <h4 class="card-title text-center" style="color:#833ae8;">{{$e->name}}</h4>
                        <h6 class="card-text text-center">{{ $e->education }}</h6>
                        <h6 class="card-text text-center">{{ $e->job }}</h6>
                        <h6 class="card-text text-center text-bold-600">"{{ $e->description }}"</h6>
                        <div class="float-right">
                            <a href="{{Route('admin.member.edit',$e->id)}}">
                                <button type="button" class="btn btn-sm" style="background:#833ae8;color:white;" data-toggle="tooltip" data-placement="top" data-original-title="Edit Data">
                                    <i class="icon-pencil"></i>
                                </button>
                            </a>
                            &nbsp
                            <form action="{{route('admin.member.destroy',$e->id)}}" method="post" class="d-inline-block" onclick="return confirm('Are you sure?')">
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
            @endforeach
        </div>
    </div>
</div>
@endsection