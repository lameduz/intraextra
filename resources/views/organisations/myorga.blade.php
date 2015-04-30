@extends('app')

@section('content')

    <div class="col-md-12">
    <div class="portlet box blue-hoki">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-globe">Mes organisations</i>
            </div>
            <div class="tools">
            </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_1">
                <thead>
                <tr>
                    <th>
                        Organisation
                    </th>
                    <th>
                        Forme juridique
                    </th>
                    <th>
                        SIRENE
                    </th>
                    <th>
                        Adresse
                    </th>
                    <th>
                        Mandataire
                    </th>
                    <th>
                        Statut
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($contact->organisations as $org)
                    <td>{{ $org->org_name }}</td>
                        <td>{{ $org->org_type }}</td>
                        <td>{{ $org->org_siren }}</td>
                        <td>{{ $org->adress_1 }}</td>
                        <td>{{ $contact->name .' '. $contact->firstname }}</td>
                        @if($org->status == 0)
                        <td>{{ 'Dans l\'attente de document' }}</td>
                        @elseif($org->status == 1)
                        <td>{{ 'En cour d\'ouverture' }}</td>
                        @else
                        <td>{{ Ouvert }}</td>
                        @endif
                        @if($org->status == 0)
                        <td><a href="{!! action('ContactsOrganisationsController@getUpload', [$contact->id,$org->id])!!}">Envoyer vos documents</a></td>
                        @endif
                    @endforeach
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    </div>



@endsection