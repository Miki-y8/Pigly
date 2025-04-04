@extends('layouts.app2')


@section('link')
<form action="/logout" method="post">
  @csrf
  <input class="header__link" type="submit" value="logout">
</form>

<form action="/logout" method="post">
  @csrf
  <input class="header__link" type="submit" value="goal">
</form>

@endsection


@section('content')
