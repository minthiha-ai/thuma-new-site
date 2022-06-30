@extends('admin.layout.master')

@section('style')
    <link type="text/css" rel="stylesheet" href="{{asset('app-assets/file-input/dist/image-uploader.min.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css">
    <link rel="stylesheet" href="//cdn.quilljs.com/1.3.6/quill.snow.css">
<link type="text/css" rel="stylesheet" href="{{asset('app-assets/file-input/dist/image-uploader.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickadate/pickadate.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="padding: 10px;">
                <h2 class="card-title danger" style="display: inline-block;padding-top:10px;">Create Content</h2>
                <a class="btn btn-sm float-right m-1" style="color:white;background:#d00cf2;" href="{{ route('admin.content.index') }}">back</a>
                <a class="btn btn-sm btn-danger float-right m-1" href="{{url('/admin')}}">Dashboard</a>
            </div>
            <div class="card-body m-3">
              <form action="{{route('admin.content.store')}}" method="post" class="form" enctype="multipart/form-data" id="form">
                  @csrf
                  <div class="form-body">
                      <div class="row">
                          <div class="col-md-12 col-12">
                              <div class="form-group">
                                  <label>Title</label>
                                  <div class="position-relative has-icon-right">
                                      <input type="text" class="form-control" name="title" value="{{old('title')}}" required>
                                      <div class="form-control-position">
                                          <i class="ft-tv danger"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="basicSelect">Select Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($cat as $s)
                                        <option value="{{$s->id}}">{{$s->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label>Author</label>
                                <div class="position-relative has-icon-right">
                                    <input type="text" class="form-control" name="author" value="{{old('author')}}" required>
                                    <div class="form-control-position">
                                        <i class="ft-user danger"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class="col-md-12 col-12">
                              <div class="form-group">
                                  <label>Content</label>
                                  <div class="position-relative has-icon-right">
                                      <div id="toolbar">
                                          <span class="ql-formats">
                                              <select class="ql-font"></select>
                                              <select class="ql-size"></select>
                                          </span>
                                          <span class="ql-formats">
                                              <button class="ql-bold"></button>
                                              <button class="ql-italic"></button>
                                              <button class="ql-underline"></button>
                                              <button class="ql-strike"></button>
                                          </span>
                                          <span class="ql-formats">
                                              <select class="ql-color"></select>
                                              <select class="ql-background"></select>
                                          </span>
                                          <span class="ql-formats">
                                              <button class="ql-script" value="sub"></button>
                                              <button class="ql-script" value="super"></button>
                                          </span>
                                          <span class="ql-formats">
                                              <button class="ql-header" value="1"></button>
                                              <button class="ql-header" value="2"></button>
                                              <button class="ql-blockquote"></button>
                                              <button class="ql-code-block"></button>
                                          </span>
                                          <span class="ql-formats">
                                              <button class="ql-list" value="ordered"></button>
                                              <button class="ql-list" value="bullet"></button>
                                              <button class="ql-indent" value="-1"></button>
                                              <button class="ql-indent" value="+1"></button>
                                          </span>
                                          <span class="ql-formats">
                                              <button class="ql-direction" value="rtl"></button>
                                              <select class="ql-align"></select>
                                          </span>
                                          <span class="ql-formats">
                                              <button class="ql-link"></button>
                                              <button class="ql-image"></button>
                                              <button class="ql-video"></button>
                                              <button class="ql-formula"></button>
                                          </span>
                                          <span class="ql-formats">
                                              <button class="ql-clean"></button>
                                          </span>
                                      </div>
                                      <div id="editor" style="height: 300px;"></div>
                                      <textarea style="display:none" id="des" name="content"></textarea>
                                      <div class="form-control-position">
                                          <i class="ft-list danger"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <div class="input-group">
                                            <input type="text" name="date" class="form-control pickadate-selectors">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar danger" style="cursor: pointer;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          <div class="col-md-12 col-12">
                              <div class="form-group">
                                  <label>Choose Photos</label>
                                  <div class="position-relative has-icon-right">
                                      <div class="inputPic" style="padding-top: .5rem;"></div>
                                      <div class="form-control-position">
                                          <i class="ft-anchor info"></i>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script src="{{asset('app-assets/file-input/src/image-uploader.js')}}" type="text/javascript"></script>
    <script src="{{asset('app-assets/file-input/dist/image-uploader.min.js')}}" type="text/javascript"></script>
    <script>
        let quill = new Quill('#editor', {
            modules: {
                syntax: true,
                toolbar: '#toolbar'
            },
            placeholder: 'Type Here for Description.',
            theme: 'snow'
        });

        document.getElementsByClassName("ql-editor")[0].setAttribute("id","editorText");

        $("#form").on("submit",function () {
            if ($("#editorText").html() === "<p><br></p>"){
                $("#des").val(null);
            }else{
                $("#des").val($("#editorText").html());
            }
        });
        $('.inputPic').imageUploader({
            imagesInputName: 'photos',
            extensions: ['.jpg','.jpeg','.png'],
            mimes: ['image/jpeg','image/png'],
            maxFiles: 1,
            label:'Click to choose photo!'
        });
    </script>
@stop
