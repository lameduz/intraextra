@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
				
				<div class="panel-body">
					@if (Auth::guest())
                        <p>
                            Ouvrir un nouveau compte. {{ action('OrganisationsController@create') }}
                        </p>
                    @else
                        <p> Bonjour {{ Auth::user()->firstname  }}</p>
                    @endif

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
