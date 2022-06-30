@extends('admin.layout.master')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <style>
        .title{
            color: white;
            /*border: 1px solid white;*/
            display: inline-block;
            line-height: 45px;
            padding: 0 10px 0 10px;
        }
    </style>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card-header">
      <h4 class="card-title"><div class="text-primayr">Welcome <span class="ft-user"></span></div></h4>
    </div>
    <div class="row match-height">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4 class="card-title">Website Statics</h4>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <div class="chart-info mb-2">
                            <span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Vists</span>
                        </div>
                        <div id="line-chart2" class="height-350 lineChart2 lineChart2Shadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row match-height">
      <div class="col-xl-4 col-lg-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Content</h4>
              </div>
              <div class="card-body">
                  <div class="card-block">
                      <div class="earning-details mb-4 text-center">
                          <h3 class="mb-1">{{count($c)}} <i class="ft-layers"></i></h3>
                          <span class="font-medium-1 grey d-block">Total Contents</span>
                      </div>
                      <div class="action-buttons mt-4 mb-1 text-center">
                          <a class="btn btn-sm btn-raised gradient-blackberry py-2 px-4 white mr-2" href="{{'admin/content'}}">View Contents</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header bg-primary"  style="height: 100px;padding-top: 20px;">
                <h4 class="title">Viewer per Pages</h4>
            </div>
            <div class="card-body">
                <div class="card-block mt-2">
                    <div class="row">
                        <div class="col-md-3 text-center pt-3" style="border-bottom: 1px solid darkgrey">
                            <button class="btn btn-outline-primary btn-sm"><span class="display-block">Index</span></button>
                            <br>
                            <span class="display-block">{{ rand(200,500) }}</span>
                            <br>
                        </div>
                        <div class="col-md-3 text-center pt-3" style="border-bottom: 1px solid darkgrey">
                            <button class="btn btn-outline-amber btn-sm"><span class="display-block">Contents</span></button>
                            <br>
                            <span class="display-block">{{ rand(200,500) }}</span>
                            <br>
                        </div>
                        <div class="col-md-3 text-center pt-3" style="border-bottom: 1px solid darkgrey">
                            <button class="btn btn-outline-green btn-sm"><span class="display-block">About</span></button>
                            <br>
                            <span class="display-block">{{ rand(200,500) }}</span>
                            <br>
                        </div>
                        <div class="col-md-3 text-center pt-3" style="border-bottom: 1px solid darkgrey">
                            <button class="btn btn-outline-secondary btn-sm"><span class="display-block">Contact</span></button>
                            <br>
                            <span class="display-block">{{ rand(200,300) }}</span>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Contents Viewer Counts</h4>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Content Title</th>
                                    <th>Date</th>
                                    <th>Author</th>
                                    <th>Viewer Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $c as $e)
                                <tr>
                                    <td>{{ $e->content_category->name }}</td>
                                    <td>{{$e->title}}</td>
                                    <td>{{ $e->date }}</td>
                                    <td>{{$e->author}}</td>
                                    <td>{{ rand(200,500) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Category</th>
                                    <th>Content Title</th>
                                    <th>Date</th>
                                    <th>Author</th>
                                    <th>Viewer Count</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script src="{{ asset('app-assets/vendors/js/datatable/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/data-tables/datatable-basic.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/chartist.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/js/dashboard2.js') }}" type="text/javascript"></script>
@endsection