@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{$thread->title}}</div>
					<div class="card-body">
						<div class="body"> {{$thread->body}}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
