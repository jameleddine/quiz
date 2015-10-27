@extends('template')
@section('first')
<center>
    <div style="margin-top:5%;">
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

   <div class="form-group">
       <label class="sr-only">Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

   <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password">
    </div>

  <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" name="password_confirmation">
    </div>
<div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
   
  </div>
    <div>
        <button type="submit" class="btn btn-default">Register</button>
    </div>
</form>
</div>
</center>
@stop