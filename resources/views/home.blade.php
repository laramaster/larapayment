@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
  
    <div class="col-md-2">
          <div class="left-sidebar">
        <div class="quick-links">
            <a href="">Dashboard</a>
        </div>
         <div class="quick-links">
            <a href="">Dashboard</a>
        </div>
         <div class="quick-links">
            <a href="">Dashboard</a>
        </div>
         <div class="quick-links">
            <a href="">Dashboard</a>
        </div>
         <div class="quick-links">
            <a href="">Dashboard</a>
        </div>
    </div>
    </div>
    <div class="col-md-10"></div>
@endsection
 