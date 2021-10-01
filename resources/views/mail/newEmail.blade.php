@component('mail::message')


<h2>{{$user->titulo}}</h2>
<p>{{$user->mensagem}}</p>

<p>Mensagem recebida de <b>{{$user->name}}</b> com email {{$user->email}}</p> 
@endcomponent