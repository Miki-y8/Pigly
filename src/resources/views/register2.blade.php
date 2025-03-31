@extends('layouts.app')


@section('content')
<h2 class="login-form__heading content__heading">新規会員登録</h2>

<p class="login-form__heading guide__heading">STEP2 体重データの入力</p>

<form class="register2-form__form" action="/register2/weight_logs" method="post">
@csrf


<label class="register2-form__label" for="weight">現在の体重</label>
<input class="register2-form__input" type="text" name="weight" id="weight" placeholder="現在の体重を入力">

<label class="register2-form__label" for="weight-goal">目標の体重</label>
<input class="register2-form__input" type="text" name="weight-goal" id="weight-goal" placeholder="目標の体重を入力">


<input class="register-form__btn btn" type="submit" value="アカウント作成">

</form>


<a class="login__link" href="/login">ログインはこちら</a>

@endsection('content')