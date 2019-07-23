@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
    	<div class="card-header">
    		<h5>Add Card</h5>
    	</div>
    	<form action="{{ route('card.store') }}" method="POST">
    		@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Card Number</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter card name" name="number">
		  </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">Card key</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter card key" name="key">
		  </div>
		 
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
    </div>
@endsection
 