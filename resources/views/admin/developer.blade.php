@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">
			<h5>Developer</h5>
      
		</div>
		<table class="table">
  <thead>
    <tr>   
      <th scope="col">Name</th>
      <th scope="col">Secret Key</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>{{ Auth::User()->name }}</td>
      <td>{{ Auth::User()->secret_key }}</td>
    </tr>
   
  </tbody>
</table>
	</div>

@endsection