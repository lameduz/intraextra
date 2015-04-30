@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                        {!! Form::open(['action' => 'ContactsController@postLogin']) !!}
                        {!! Form::label('email','Email')!!}
                        {!! Form::text('email',null,['class'=> 'form-control']) !!}
                        {!! Form::label('password','Mot de passe') !!}
                        {!! Form::password('password',['class' => 'form-control']) !!}
                        {!! Form::submit()!!}
                        {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
