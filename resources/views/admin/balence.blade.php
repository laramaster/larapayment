@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">
			<h5>Balence</h5>
      
		</div>
		<table class="table">
  <thead>
    <tr>   
      <th scope="col">Name</th>
      <th scope="col">Total Balence</th>
    </tr>
  </thead>
  <tbody>
    @if($balence)
    <tr>
      <td>{{ Auth::User()->name }}</td>
      <td>{{ $balence->balence }}</td>
    </tr>
   @endif
  </tbody>
</table>
	</div>

@endsection