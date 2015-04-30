<div class="col-md-8">
<h1>Bonjour <span>{{$firstname}}</span>,</h1>
    <p>Votre identifiant est : {{$username}}</p>
    <p>Votre mot de passe est : {{$password}}</p>
    <h3>{!! action('OrganisationsController@confirm',$token) !!}}</h3>
</div>