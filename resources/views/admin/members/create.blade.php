@extends('admin.layout.master')

@section('style')
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/file-input/dist/image-uploader.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickadate/pickadate.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="padding: 10px;">
                    <h2 class="card-title danger" style="display: inline-block;padding-top:10px;">Create Member Info</h3>
                    <a class="btn btn-sm float-right m-1" style="color:white;background:#833ae8;" href="{{ route('admin.member.index') }}">back</a>
                    <a class="btn btn-sm btn-danger float-right m-1" href="{{url('/admin')}}">Dashboard</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body m-3">
                    <form action="{{route('admin.member.store')}}" method="post" class="form" enctype="multipart/form-data" id="form">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Select Profile Picture</label>
                                        <div class="position-relative has-icon-right">
                                            <div class="inputPic" style="padding-top: .5rem;"></div>
                                            <div class="form-control-position">
                                                <i class="ft-image danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control" placeholder="Enter your name" name="name" value="{{old('name')}}" required>
                                            <div class="form-control-position">
                                                <i class="ft-user danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="input-group">
                                            <input type="text" name="dob" class="form-control pickadate-selectors">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar danger" style="cursor: pointer;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="email" class="form-control" placeholder="Enter your email" name="email" value="{{old('email')}}" required>
                                            <div class="form-control-position">
                                                <i class="ft-mail danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Education</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control" name="education" placeholder="Enter educational status" value="{{old('education')}}" required>
                                            <div class="form-control-position">
                                                <i class="ft-star danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Job</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control" placeholder="Enter your job" name="job" value="{{old('job')}}" required>
                                            <div class="form-control-position">
                                                <i class="ft-github danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control" name="position" placeholder="Enter your position at Thuma Organization" value="{{old('position')}}" required>
                                            <div class="form-control-position">
                                                <i class="ft-monitor danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Favourite Quote</label>
                                        <div class="position-relative has-icon-right">
                                            <input type="text" class="form-control" name="description" placeholder="Enter your own quote or favourite quote." value="{{old('description')}}" required>
                                            <div class="form-control-position">
                                                <i class="ft-heart danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-md float-right" style="color:white;background:#833ae8;" value="Create">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script') 
    <script src="{{ asset('app-assets/vendors/js/pickadate/picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/pickadate/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/pickadate/picker.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/pickadate/legacy.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/pick-a-datetime.js') }}" type="text/javascript"></script>
    <script src="{{asset('app-assets/file-input/src/image-uploader.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/file-input/dist/image-uploader.min.js')}}" type="text/javascript"></script>
    <script>
        $('.inputPic').imageUploader({
            imagesInputName: 'photo',
            extensions: ['.jpg','.jpeg','.png'],
            mimes: ['image/jpeg','image/png'],
            maxFiles: 1,
            label:'Click to choose photo!'
        });
    </script>
@stop
