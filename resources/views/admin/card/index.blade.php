@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">
			<h5>Card</h5>
        @if($card == null)
			<div class="text-right">
				<a href="{{ route('card.create') }}" class="btn btn-info">Add Card</a>
			</div>
      @endif
		</div>
		<table class="table">
  <thead>
   
    <tr>
     
      <th scope="col">Card Number</th>
      <th scope="col">Card Date</th>
      <th scope="col">Card Key</th>
    </tr>
    
  </thead>
  <tbody>
     @if($card != null)
    <tr>
      <td>{{ $card->number }}</td>
      <td>{{ $card->date }}</td>
      <td>{{ $card->key }}</td>
    </tr>
    @endif
  </tbody>
</table>
	</div>

@endsection