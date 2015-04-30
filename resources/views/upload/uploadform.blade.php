@extends('app')
@section('content')
    <div class="col-md-8">
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe">Envoyer vos documents</i>
                </div>
                <div class="tools">
                </div>
            </div>
        </div>
        <div class="portlet-body">
           {!! Form::open(array('route'=>'contactorg.upload','files' => true, 'method' => 'post' )) !!}
            {!! Form::file('files[]',array('multiple' => 'multiple'))!!}
            {!! Form::submit('Submit') !!}
            {!! Form::close() !!}
        </div>
@endsection