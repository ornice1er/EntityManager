@if(Session::has('success'))
<p class="text-success">{{Session::get('success')}}</p>
@endif

@if(Session::has('info'))
<p class="text-info">{{Session::get('info')}}</p>
@endif

@if(Session::has('warning'))
<p class="text-warning">{{Session::get('warning')}}</p>
@endif

@if(Session::has('danger'))
<p class="text-danger">{{Session::get('danger')}}</p>
@endif