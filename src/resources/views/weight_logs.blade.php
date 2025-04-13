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
<form class="search-form" action="/search" method="get">
@csrf
<input class="search-form__date" type="date" name="date" value="{{request('date')}}">
<input class="search-form__search-btn btn" type="submit" value="検索">


<table class="weight_logs__table">
    <tr class="weight_logs__row">
        <th class="weight_logs__label">日付</th>
        <th class="weight_logs__label">体重</th>
        <th class="weight_logs__label">食事摂取カロリー</th>
        <th class="weight_logs__label">運動時間</th>
        <th class="weight_logs__label"></th>
    </tr>
    @foreach($weight_logs as $weightlog)
    <tr class="weight_logs__row">
        <td class="weight_logs__data">{{$weightlog->date}}</td>
    </tr>
    @endforeach
</table>

@section('content')

$weight_logs = WeightLog::all();

'weight_logs',['weight_logs' => $weight_logs]