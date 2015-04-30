@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Accueil</div>
				<h2 class="text-center">Ouverture de compte client</h2>
				@foreach($errors->all() as $error)
				<li>{!! $error !!}</li>
				@endforeach
				<div class="panel-body">
					{!! Form::open( array('route' => 'organisations.store') ) !!}
					<div class="form-group">
						<div class="col-md-6">
							{!! Form::label('org_name','Raison social') !!}
							{!! Form::text('org_name',null,array('class' => 'form-control')) !!}
						</div>
						<div class="col-md-4">
							{!! Form::label('org_type','Forme juridique') !!}
							{!! Form::select('org_type',array(
							'SARL' => 'SARL',
							'SASU' => 'SASU',
							'SAS' => 'SAS',
							'SA' => 'SA',
							'SCA' => 'SC',
							'SC' => 'SC',
							'SCI' => 'SCI',
							'SCM' => 'SCM',
							'SCOP' => 'SCOP',
							'SCP' => 'SCP',
							'SCS' => 'SCS',
							'SEP' => 'SEP',
							'SELCA' => 'SELCA',
							'SNC' => 'SNC',
							'SELAFA' => 'SELAFA',
							'SELARL' => 'SELARL',
							'SELAS' => 'SELAS',
							'SEM' => 'SEM',
							'SEML' => 'SEML',
							'SEP' => 'SEP',
							'SICA' => 'SICA',
							'GAEC' => 'GAEC',
							'GEIE' => 'GEIE',
							'GIE' => 'GIE',
							'EARL' => 'EARL',
							'EI' => 'EI',
							'EIRL' => 'EIRL',
							'EURL' => 'EURL'),null,array('class' => 'form-control')) !!}
						</div>
						<div class="col-sm-6">
							{!! Form::label('org_siren','Numero de SIREN') !!}
							{!! Form::text('org_siren',null,array('class' => 'form-control')) !!}
						</div>
						<div class="col-sm-4">
							{!! Form::label('org_ape_naf','APE NAF') !!}
							{!! Form::text('org_ape_naf',null,array('class' => 'form-control')) !!}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-3">
							{!! Form::label('function','Mandataire social') !!}
							{!! Form::text('function',null,['class' => 'form-control']) !!}
						</div>
						<div class="col-md-3">
							{!! Form::label('name','Nom du contact')!!}
							{!! Form::text('name',null,array('class' => 'form-control')) !!}
						</div>
						<div class="col-md-3">
							{!! Form::label('firstname','Prénom du contact') !!}
							{!! Form::text('firstname',null,array('class' => 'form-control')) !!}
						</div>
						<div class="col-md-5">
							{!! Form::label('email','Adresse éléctronique') !!}
							{!! Form::email('email',null,array('class' => 'form-control')) !!}
						</div>
						<div class="col-md-3">
							{!! Form::label('telephone','Telephone') !!}
							{!! Form::text('telephone',null,array('class' => 'form-control')) !!}
						</div>
						<div class="col-md-3">
							{!! Form::label('mobile','Mobile') !!}
							{!! Form::text('mobile',null,array('class' => 'form-control')) !!}
						</div>
						
					</div>
					<div class="form-group">
						<div class="col-md-12">
							{!! Form::label('adress_1','Adresse 1') !!}
							{!! Form::text('adress_1',null,array('class' => 'form-control')) !!}
						
							{!! Form::label('adress_2','Adresse 2') !!}
							{!! Form::text('adress_2',null,array('class' => 'form-control')) !!}
						</div>
						<div class="col-md-3">
							{!! Form::label('zipcode','Code postal') !!}
							{!! Form::text('zipcode',null,array('class' => 'form-control')) !!}
						</div>

						<div class="col-md-4">
							{!! Form::label('city','Ville') !!}
							{!! Form::text('city',null,array('class' => 'form-control'))!!}
						</div>

						<div class="col-md-3">
							{!! Form::label('country','Pays') !!}
							{!! Form::text('country',null,array('class' => 'form-control'))!!}
						</div>

					</div>
					<div class="form-group">
						<div class="col-md-5">
							{!! Form::label('bic', 'BIC') !!}
							{!! Form::text('bic',null,array('class' => 'form-control'))!!}
						</div>
						<div class="col-md-5">
							{!! Form::label('iban','IBAN') !!}
							{!! Form::text('iban',null,array('class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-md-2">
					{!! Form::submit('Envoyer',array('class' => 'form-control'))!!}
					{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
	@endsection