@extends('layouts.app')

@section('content')
<h1>Page non trouvée</h1>
<p>Désolé, la page que vous recherchez n'existe pas.</p>
<a href="{{ url('/') }}">Retour à l'accueil</a>
@endsection