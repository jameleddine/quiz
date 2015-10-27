@extends('template')
@section('first')

<center>

<div style="margin-top:10%">
	<p>Bienvenu sur notre jeux pour démarrer veuillez s'authentifier</p>
	<form action="/auth/login">
 <input type="submit" class="btn btn-success" value="Login">
</form>
<form action="/auth/register">
  <input type="submit" class="btn btn-inverse" value="Register">
</form>
</div>
</center>
@stop