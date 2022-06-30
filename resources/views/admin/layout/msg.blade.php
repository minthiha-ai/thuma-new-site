@if(count($errors)>0)
    @foreach($errors->all() as $e)
        <div class="alert alert-danger">{{$e}}</div>
    @endforeach
@endif

@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

@if(Session::has('danger'))
    <p class="alert alert-danger">{{ Session::get('danger') }}</p>
@endif

@if(Session::has('info'))
    <p class="alert alert-info">{{ Session::get('info') }}</p>
@endif
